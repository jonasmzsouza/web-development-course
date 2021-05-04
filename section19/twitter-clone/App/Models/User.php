<?php

    namespace App\Models;

    use MF\Model\Model;

    class User extends Model {

        private $id;
        private $name;
        private $email;
        private $password;

        public function __get($attribute) {
            return $this->$attribute;
        }

        public function __set($attribute, $value) {
            $this->$attribute = $value;
        }

        // save
        public function save() {
            $query = "insert into tb_user(nm_user, ds_email, ds_password)values(:name, :email, :password)";

            $stmt = $this->db->prepare($query);
            $stmt->bindValue(':name', $this->__get('name'));
            $stmt->bindValue(':email', $this->__get('email'));
            $stmt->bindValue(':password', $this->__get('password')); //md5() -> hash 32 characters
            $stmt->execute();

            return $this;
        }

        // validate if a registration can be made
        public function validateRegistration() {
            $isValid = true;

            if(strlen($this->__get('name')) < 2) {
                $isValid = false;
            }

            if(strlen($this->__get('email')) < 3) {
                $isValid = false;
            }

            if(strlen($this->__get('password')) < 3) {
                $isValid = false;
            }

            return $isValid;
        }

        // retrieve a user by email
        public function getUserByEmail() {
            $query = "select nm_user, ds_email from tb_user where ds_email = :email";
            $stmt = $this->db->prepare($query);
            $stmt->bindValue(':email', $this->__get('email'));
            $stmt->execute();

            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        }

        public function authenticate() {
            $query = "select id_user, nm_user, ds_email from tb_user where ds_email = :email and ds_password = :password";
            $stmt = $this->db->prepare($query);
            $stmt->bindValue(':email', $this->__get('email'));
            $stmt->bindValue(':password', $this->__get('password'));
            $stmt->execute();

            $user = $stmt->fetch(\PDO::FETCH_ASSOC);

            if ($user['id_user'] != '' && $user['nm_user'] != '') {
                $this->__set('id', $user['id_user']);
                $this->__set('name', $user['nm_user']);
            }

            return $this;
        }

        public function getAll() {
            $query = "
                    select 
                        u.id_user, u.nm_user, u.ds_email, 
                        (
                            select
                                count(*)
                            from
                                tb_user_follower as uf
                            where
                                uf.id_user = :id and uf.id_user_following = u.id_user
                        ) as following_yn 
                    from
                        tb_user as u 
                    where 
                        u.nm_user like :name and u.id_user != :id";
            $stmt = $this->db->prepare($query);
            $stmt->bindValue(":name", '%'.$this->__get('name').'%');
            $stmt->bindValue(":id", $this->__get('id'));
            $stmt->execute();

            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        }

        public function followUser($id_user_following) {
            $query = "insert into tb_user_follower(id_user, id_user_following) values(:id_user, :id_user_following)";
            $stmt = $this->db->prepare($query);
            $stmt->bindValue(':id_user', $this->__get('id'));
            $stmt->bindValue(':id_user_following', $id_user_following);
            $stmt->execute();

            return true;
        }

        public function unfollowUser($id_user_following) {
            $query = "delete from tb_user_follower where id_user = :id_user and id_user_following = :id_user_following";
            $stmt = $this->db->prepare($query);
            $stmt->bindValue(':id_user', $this->__get('id'));
            $stmt->bindValue(':id_user_following', $id_user_following);
            $stmt->execute();

            return true;
        }

        public function getUserInformation() {
            $query = "select nm_user from tb_user where id_user = :id_user";
            $stmt = $this->db->prepare($query);
            $stmt->bindValue(':id_user', $this->__get('id'));
            $stmt->execute();

            return $stmt->fetch(\PDO::FETCH_ASSOC);
        }

        public function getTotalTweets() {
            $query = "select count(*) as total_tweets from tb_tweet where id_user = :id_user";
            $stmt = $this->db->prepare($query);
            $stmt->bindValue(':id_user', $this->__get('id'));
            $stmt->execute();

            return $stmt->fetch(\PDO::FETCH_ASSOC);
        }

        public function getTotalFollowing() {
            $query = "select count(*) as total_following from tb_user_follower where id_user = :id_user";
            $stmt = $this->db->prepare($query);
            $stmt->bindValue(':id_user', $this->__get('id'));
            $stmt->execute();

            return $stmt->fetch(\PDO::FETCH_ASSOC);
        }
        
        public function getTotalFollowers() {
            $query = "select count(*) as total_followers from tb_user_follower where id_user_following = :id_user";
            $stmt = $this->db->prepare($query);
            $stmt->bindValue(':id_user', $this->__get('id'));
            $stmt->execute();

            return $stmt->fetch(\PDO::FETCH_ASSOC);
        }    

    }

?>