<?php
class Users
{
    // Connection
    private $conn;
    // Table
    private $db_table = "users";
    // Columns
    public $id;
    public $nama_lengkap;
    public $email;
    public $password;
    public $foto;
    public $pekerjaan;
    public $posisi;
    // Db connection
    public function __construct($db)
    {
        $this->conn = $db;
    }
    // GET ALL
    public function getUsers()
    {
        $sqlQuery = "SELECT id, nama_lengkap, email, password, foto, pekerjaan, posisi FROM " . $this->db_table . "";
        $stmt = $this->conn->prepare($sqlQuery); //untuk mengkoneksikan dan eksekusi query
        $stmt->execute();
        return $stmt;
    }
    // CREATE
    public function createUser()
    {
        $sqlQuery = "INSERT INTO " . $this->db_table . "
        SET
        nama_lengkap = :nama_lengkap,
        email        = :email,
        password     = :password,
        foto         = :foto,
        pekerjaan    = :pekerjaan,
        posisi       = :posisi";
        $stmt = $this->conn->prepare($sqlQuery);
        // sanitize
        $this->nama_lengkap = htmlspecialchars(strip_tags($this->nama_lengkap));
        $this->email        = htmlspecialchars(strip_tags($this->email));
        $this->password     = htmlspecialchars(strip_tags($this->password));
        $this->foto         = htmlspecialchars(strip_tags($this->foto));
        $this->pekerjaan    = htmlspecialchars(strip_tags($this->pekerjaan));
        $this->posisi       = htmlspecialchars(strip_tags($this->posisi));
        // bind data
        $stmt->bindParam(":nama_lengkap", $this->nama_lengkap);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":password", $this->password);
        $stmt->bindParam(":foto", $this->foto);
        $stmt->bindParam(":pekerjaan", $this->pekerjaan);
        $stmt->bindParam(":posisi", $this->posisi);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }
    // READ single
    public function getSingleUser()
    {
        $sqlQuery = "SELECT
        id,
        nama_lengkap,
        email,
        password,
        foto,
        pekerjaan,
        posisi        
        FROM
        " . $this->db_table . "
        WHERE
        id = ?
        LIMIT 0,1";
        $stmt = $this->conn->prepare($sqlQuery);
        $stmt->bindParam(1, $this->id);
        $stmt->execute();
        $dataRow = $stmt->fetch(PDO::FETCH_ASSOC);
        $this->nama_lengkap = $dataRow['nama_lengkap'];
        $this->email        = $dataRow['email'];
        $this->password     = $dataRow['password'];
        $this->foto         = $dataRow['foto'];
        $this->pekerjaan    = $dataRow['pekerjaan'];
        $this->posisi       = $dataRow['posisi'];
    }
    // UPDATE
    public function updateUser()
    {
        $sqlQuery = "UPDATE
        " . $this->db_table . "
        SET
        nama_lengkap = :nama_lengkap,
        email        = :email,
        password     = :password,
        foto         = :foto,
        pekerjaan    = :pekerjaan,
        posisi       = :posisi
        WHERE
        id = :id";
        $stmt = $this->conn->prepare($sqlQuery);

        $this->nama_lengkap = htmlspecialchars(strip_tags($this->nama_lengkap));
        $this->email        = htmlspecialchars(strip_tags($this->email));
        $this->password     = htmlspecialchars(strip_tags($this->password));
        $this->foto         = htmlspecialchars(strip_tags($this->foto));
        $this->pekerjaan    = htmlspecialchars(strip_tags($this->pekerjaan));
        $this->posisi       = htmlspecialchars(strip_tags($this->posisi));
        $this->id           = htmlspecialchars(strip_tags($this->id));
        // bind data
        $stmt->bindParam(":nama_lengkap", $this->nama_lengkap);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":password", $this->password);
        $stmt->bindParam(":foto", $this->foto);
        $stmt->bindParam(":pekerjaan", $this->pekerjaan);
        $stmt->bindParam(":posisi", $this->posisi);
        $stmt->bindParam(":id", $this->id);
        $stmt->fetchAll();

        try {
            $stmt->execute();
        } catch (PDOException $exception) {
            die($exception->getMessage());
        }

        if (count($stmt->fetchAll()) == 0) {
            return true;
        }
    }
    // DELETE
    function deleteUser()
    {
        $sqlQuery = "DELETE FROM " . $this->db_table . " WHERE id = ?";
        $stmt = $this->conn->prepare($sqlQuery);
        $this->id = htmlspecialchars(strip_tags($this->id));
        $stmt->bindParam(1, $this->id);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function prosesLogin()
    {
        $sqlQuery = "SELECT
        id,
        nama_lengkap,
        email,
        password,
        foto,
        pekerjaan,
        posisi 
        FROM
        " . $this->db_table . "
        WHERE
        email = :email AND
        password = :password
        LIMIT 0,1";
        $stmt = $this->conn->prepare($sqlQuery);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":password", $this->password);
        $stmt->execute();
        $dataRow = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!empty($dataRow)) {
            return $dataRow;
        } else {
            return false;
        }
    }

    public function prosesLogout()
    {
        session_start();
        session_unset();
        session_destroy();
        return true;
    }
}
