<?php
    // include 'Database.php';

    class Questions extends Database{

        public function createQues($title, $details, $user_id) {

            $currentDateTime = date('Y-m-d H:i:s');
            $sql = "INSERT INTO questions (title,details,user_id,created_at) values ('$title', '$details','$user_id','$currentDateTime')";

            $this->dataWrite($sql);
        }

        public function allques(){
            $sql = "SELECT * from questions ORDER BY created_at DESC";
            $result = $this->dataRead($sql);
            return($result);
        }
        public function userName(){
            $sql = "SELECT username FROM users";
            $name = $this->dataRead($sql);
            return($name);
        }

        // Single question
        public function singleQusestion($id){
                $sql = "SELECT * FROM questions where id='$id' ";
                $result = $this->dataReadSingle($sql);

                return $result;

        }

        // Creat comment
        public function creatAnswer($ansdetails,$user_id,$questions_id,){
            $sql = "INSERT INTO answers (ansdetails,user_id,questions_id) VALUES ('$ansdetails','$user_id','$questions_id')";
            
            $this->dataWrite($sql);
        }
        

        public function getAnswer($questions_id){
            $sql= "select answers.ansdetails,answers.user_id,users.username from questions join answers on questions.id=answers.questions_id join users on users.id=answers.user_id where questions.id='$questions_id'";

            $result = $this->dataRead($sql);
            return $result;
        }
     
        public function updateQues($title,$details,$questions_id,$user_id){
            if($user_id == $_SESSION['user_id']){
                $sql= "UPDATE questions SET title='$title', details='$details' WHERE id='$questions_id'";
                $this->dataRead($sql);
            }else{
                echo "<script>
                alert('Unauthorized');
                </script>";
            die();
            }
            
        }

        public function deleteQues($qid){
            $sql = "DELETE FROM questions where id='$qid' ";
            $this->dataRead($sql);
        }
    }


?>