<?php

    namespace App\Models;

    use MF\Model\Model;

    class Tweet extends Model {

        private $id;
        private $id_user;
        private $tweet;
        private $date;

        public function __get($attribute) {
            return $this->$attribute;
        }

        public function __set($attribute, $value) {
            $this->$attribute = $value;
        }

        // save
        public function save() {
            $query = "insert into tb_tweet(id_user, ds_tweet)values(:id_user, :tweet)";
            $stmt = $this->db->prepare($query);
            $stmt->bindValue(':id_user', $this->__get('id_user'));
            $stmt->bindValue(':tweet', $this->__get('tweet'));
            $stmt->execute();

            return $this;
        }

        // recover
        public function getAll() {
            $query = "
                select 
                    t.id_tweet, t.id_user, u.nm_user, t.ds_tweet, DATE_FORMAT(t.dt_tweet, '%d/%m/%Y %H:%i') as dt_tweet
                from 
                    tb_tweet as t
                    left join tb_user as u on (t.id_user = u.id_user)
                where 
                    t.id_user = :id_user
                    or t.id_user in (select id_user_following from tb_user_follower where id_user = :id_user)
                order by
                    t.dt_tweet desc";
            $stmt = $this->db->prepare($query);
            $stmt->bindValue(':id_user', $this->__get('id_user'));
            $stmt->execute();

            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        }

        // recover with pagination
        public function getPerPage($limit, $offset) {
            $query = "
                select 
                    t.id_tweet, t.id_user, u.nm_user, t.ds_tweet, DATE_FORMAT(t.dt_tweet, '%d/%m/%Y %H:%i') as dt_tweet
                from 
                    tb_tweet as t
                    left join tb_user as u on (t.id_user = u.id_user)
                where 
                    t.id_user = :id_user
                    or t.id_user in (select id_user_following from tb_user_follower where id_user = :id_user)
                order by
                    t.dt_tweet desc
                limit
                    $limit
                offset
                    $offset
            ";
            $stmt = $this->db->prepare($query);
            $stmt->bindValue(':id_user', $this->__get('id_user'));
            $stmt->execute();

            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        }

        // recover total records
        public function getTotalRecords() {
            $query = "
                select 
                    count(*) as total_records
                from 
                    tb_tweet as t
                    left join tb_user as u on (t.id_user = u.id_user)
                where 
                    t.id_user = :id_user
                    or t.id_user in (select id_user_following from tb_user_follower where id_user = :id_user)
            ";
            $stmt = $this->db->prepare($query);
            $stmt->bindValue(':id_user', $this->__get('id_user'));
            $stmt->execute();

            return $stmt->fetch(\PDO::FETCH_ASSOC);
        }        

        public function remove() {
            $query = "delete from tb_tweet where id_tweet = :id_tweet and id_user = :id_user";
            $stmt = $this->db->prepare($query);
            $stmt->bindValue(':id_tweet', $this->__get('id'));
            $stmt->bindValue(':id_user', $this->__get('id_user'));
            $stmt->execute();

            return true;
        }

    }


?>