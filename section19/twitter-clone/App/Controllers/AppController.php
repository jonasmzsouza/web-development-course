<?php

    namespace App\Controllers;

    // miniframework resources
    use MF\Controller\Action;
    use MF\Model\Container;

    class AppController extends Action {

        public function validateAuthenticated() {
            session_start();
            if(!isset($_SESSION['id']) || $_SESSION['id'] == '' || !isset($_SESSION['name']) || $_SESSION['name'] == '') {
                header('Location: /?login=error');
            }
        }        

        public function getInstanceAuthenticatedUser() {
            $user = Container::getModel('User');
            $user->__set('id', $_SESSION['id']);
            return $user;
        }

        public function getInstanceTweet() {
            $tweet = Container::getModel('Tweet');
            $tweet->__set('id_user', $_SESSION['id']);
            return $tweet;
        }          

        public function timeline() {
            
            $this->validateAuthenticated();

            // recovery of tweets
            $tweet = Container::getModel('Tweet');
            $tweet->__set('id_user', $_SESSION['id']);

            $user = $this->getInstanceAuthenticatedUser();
            $this->getUserIndicators($user);

            // paging variables
            $total_records_pages = 10;
            $page = isset($_GET['page']) ? $_GET['page'] : 1;
            $displacement = ($page - 1) * $total_records_pages;

            //$tweets = tweet->getAll();
            $tweets = $tweet->getPerPage($total_records_pages, $displacement);
            $total_tweets = $tweet->getTotalRecords();
            $this->view->total_pages = ceil($total_tweets['total_records'] / $total_records_pages);
            $this->view->active_page = $page;

            $this->view->tweets = $tweets;
            $this->render('timeline');

        }

        public function tweet() {
            $this->validateAuthenticated();
            $tweet = $this->getInstanceTweet();
            $tweet->__set('tweet', $_POST['tweet']);
            $tweet->save();
            header('Location: /timeline');
        }

        public function whoToFollow() {
             
            $this->validateAuthenticated();
            $searchFor = isset($_GET['searchFor']) ? $_GET['searchFor'] : '';
            $user = $this->getInstanceAuthenticatedUser();
            $users = array();

            if($searchFor != '') {
                $user->__set('name', $searchFor);
                $users = $user->getAll(); 
            }

            $user = $this->getInstanceAuthenticatedUser();
            $this->getUserIndicators($user);
            $this->view->users = $users;
            $this->render('whoToFollow');
        }

        public function action() {

            $this->validateAuthenticated();

            $action = isset($_GET['action']) ? $_GET['action'] : '';
            $id_user_following = isset($_GET['id_user']) ? $_GET['id_user'] : '';

            $user = $this->getInstanceAuthenticatedUser();

            if($action == 'follow') {
                $user->followUser($id_user_following);
            } else if ($action == 'unfollow') {
                $user->unfollowUser($id_user_following);
            }

            header('Location: /who_to_follow');
        }

        public function remove() {

            $this->validateAuthenticated();
            $id_tweet = isset($_GET['id_tweet']) ? $_GET['id_tweet'] : '';
            $tweet = $this->getInstanceTweet();
            $tweet->__set('id', $id_tweet);
            $tweet->remove();
            header('Location: /timeline');
        }

        public function getUserIndicators($user) {

            $this->view->user_information = $user->getUserInformation();
            $this->view->total_tweets = $user->getTotalTweets();
            $this->view->total_following = $user->getTotalFollowing();
            $this->view->total_followers = $user->getTotalFollowers();
    
        }

    }

?>