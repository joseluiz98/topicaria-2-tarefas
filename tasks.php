
<?php
    class Task
    {

        protected $conn = null;

        public function __construct()
        {
            $this->connect();
        }

        public function connect()
        {
            $this->conn = new PDO("mysql:host=localhost;dbname=tasks", "root", "root");
        }

        public function getAllTasks()
        {
            $cmd = $this->conn->prepare("SELECT * FROM task");
            $cmd->execute();

            return $cmd;
        }

        public function insertTask($data)
        {
            $cmd = $this->conn->prepare(
                "INSERT INTO task
                (
                    descricao
                ) VALUES (
                    :descricao
                )"
            );

            $data = [
                ':descricao' => $data['descricao']
            ];

            $cmd->execute($data);
        }

        public function removeTask($data)
        {
            $cmd = $this->conn->prepare (
                "DELETE FROM task WHERE id = :id"
            );

            $data = [
                ':id' => $data['id']
            ];

            return $cmd->execute($data);
        }
    }
?>
