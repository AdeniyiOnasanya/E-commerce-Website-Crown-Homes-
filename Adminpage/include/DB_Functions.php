<?php
 
class DB_Functions {
 
    private $conn;
 
    // constructor
    function __construct() {
        require_once 'DB_Connect.php';
        // connecting to database
        $db = new Db_Connect();
        $this->conn = $db->connect();
    }
 
    // destructor
    function __destruct() {
         
    }
 
    /**
     * Storing Add Properties
     */
    public function storeProducts($product_name,$bathroom,$toilet,$product_image,$product_image2,$product_image3,$product_image4,$product_image5,$product_image6,$product_image7,$location,$category,$price,$description){

       $stmt = $this->conn->prepare("INSERT INTO Products(product_name,bathroom,toilet,product_image,product_image2,product_image3,product_image4,product_image5,product_image6,product_image7,location,category,price,description) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?)");


       $stmt->bind_param("ssssssssssssss",$product_name,$bathroom,$toilet,$product_image,$product_image2,$product_image3,$product_image4,$product_image5,$product_image6,$product_image7,$location,$category,$price,$description);
       $result = $stmt->execute();
       

       if ($result) {
           echo "<script>alert('Product has been inserted successfully')</script>";
           echo "<script>window.open</script>";
           $stmt->close();

       }else{
         echo "<script>alert('Product has not been inserted successfully')</script>";
           echo "<script>window.open</script>";
           $stmt->close();
       }

    }  


 
}
 
?>