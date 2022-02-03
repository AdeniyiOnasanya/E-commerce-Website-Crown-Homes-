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
     * Product View
     */
    public function getProducts($query) {

       $stmt = $query;

       $result = $this->conn->query($stmt);

       if ($result->num_rows > 0) {

       while ($row_products = $result->fetch_assoc()) {
        
        $pro_id =  $row_products['product_id'];
        $pro_name= $row_products['product_name'];
        $pro_image1 = $row_products['product_image'];
        $pro_price = $row_products['price'];
        $pro_description = $row_products['description'];
        $pro_category = $row_products['City'];
        $pro_bathroom = $row_products['bathroom'];
        $pro_toilet = $row_products['toilet'];
        $pro_desc = $row_products['description'];
        $pro_location = $row_products['location'];

        $strlenght =  strlen($pro_desc);

        $out = $strlenght > 0 ? substr($pro_desc,0,90)."..." : $pro_desc;



        $item = " <div class='col-12 col-md-6 col-xl-4'>
                    
                    <div class='single-featured-property mb-50 wow fadeInUp' data-wow-delay='100ms'>
                        <!-- Property Thumbnail -->
                        <a href='single-listings.php?pro_id=$pro_id'>
                        <div class='property-thumb'>
                            <img src='Adminpage/images/product_images/$pro_image1' alt='' style='width:1000px; height:250px;'>

                            <div class='tag'>
                                <span>$pro_category</span>
                            </div>
                             <div class='list-price'>
                                <p>£ $pro_price</p>
                            </div>
                        </div>
                        
                        <!-- Property Content -->
                        <div class='property-content'>
                            <h5> $pro_name</h5>
                            <p class='location'><img src='img/icons/location_tag.png' alt='' style='width:30px; height:30px;'>$pro_location</p>
                            <p>$out</p>
                            <div class='property-meta-data d-flex align-items-end justify-content-between'>
                                <div class='new-tag'>
                                    <img src='img/icons/new_tag.png' alt=''style='width:20px; height:20px;'>
                                </div>
                                <div class='bathroom'>
                                    <img src='img/icons/shower.png' alt='' style='width:20px; height:20px;'>
                                    <span>$pro_bathroom</span>
                                </div>
                                <div class='garage'>
                                    <img src='img/icons/toilet1.png' alt='' style='width:20px; height:20px;'>
                                    <span>$pro_toilet</span>
                                </div>
                                
                            </div>
                        </div>
                        </a>
                    </div>
                     
                </div>
                 ";

                 echo($item);




       
         }

       }else {
               echo "0 results";
             }
          


    }  


    /**
     * Properties details
     */ 

    public function product_details($pro_id){


        $getProduct = "SELECT * FROM Products WHERE product_id = $pro_id";

        $result = $this->conn->query($getProduct);

        if ($result->num_rows > 0) {

            while ($row_products = $result->fetch_assoc()) {

              $pro_name= $row_products['product_name'];
              $pro_image1 = $row_products['product_image'];
              $pro_image2 = $row_products['product_image2'];
              $pro_image3 = $row_products['product_image3'];
              $pro_image4 = $row_products['product_image4'];
              $pro_image5 = $row_products['product_image5'];
              $pro_image6 = $row_products['product_image6'];
              $pro_image7 = $row_products['product_image7'];
              $pro_price = $row_products['price'];
              $pro_category = $row_products['category'];
              $pro_bathroom = $row_products['bathroom'];
              $pro_toilet = $row_products['toilet'];
              $pro_desc = $row_products['description'];
              $pro_location = $row_products['location'];


              $item_details = " <section class='listings-content-wrapper section-padding-100'>
        <div class='container'>
            <div class='row'>
                <div class='col-12'>
                    <!-- Single Listings Slides -->
                    <div class='single-listings-sliders owl-carousel'>
                        <!-- Single Slide -->
                        <img src='Adminpage/images/product_images/$pro_image1' alt='' style='width: 1200px; height:600px;' >
                        <!-- Single Slide -->
                        <img src='Adminpage/images/product_images/$pro_image2' alt='' style='width: 1200px; height:600px;'>
                        <!-- Single Slide -->
                        <img src='Adminpage/images/product_images/$pro_image3' alt='' style='width: 1200px; height:600px;' >
                    </div>
                </div>
            </div>

            <div class='row justify-content-center'>
                <div class='col-12 col-lg-8'>
                    <div class='listings-content''
                        <!-- Price -->
                        <div class='list-price'>
                            <p>£ $pro_price</p>
                        </div>
                        <h5> $pro_name </h5>
                        <p class='location'><img src='img/icons/location_tag.png' alt='' style='width:30px; height:30px;'>$pro_location</p>
                        <p>$pro_desc</p>
                        <!-- Meta -->
                        <div class='property-meta-data d-flex align-items-end'>
                            <div class='new-tag'>
                                <img src='img/icons/new_tag.png' alt=''style='width:20px; height:20px;'>
                            </div>
                            <div class='bathroom'>
                                <img src='img/icons/shower.png' alt='' style='width:20px; height:20px;'>
                                <span>$pro_bathroom</span>
                            </div>
                            <div class='garage'>
                                <img src='img/icons/toilet1.png' alt='' style='width:20px; height:20px;'>
                                <span>$pro_toilet</span>
                            </div>
                        </div>
                        <!-- Core Features -->
                        <ul class='listings-core-features d-flex align-items-center'>
                            <li><i class='fa fa-check' aria-hidden='true'></i> Wifi</li>
                            <li><i class='fa fa-check' aria-hidden='true'></i> Dryer</li>
                            <li><i class='fa fa-check' aria-hidden='true'></i> Heating System</li>
                            <li><i class='fa fa-check' aria-hidden='true'></i> Home Essentials</li>
    
                            <li><i class='fa fa-check' aria-hidden='true'></i> Smoke alarm</li>
                            <li><i class='fa fa-check' aria-hidden='true'></i> Free parking on premises</li>
                        </ul>
                    </div>
                </div>
                <div class='col-12 col-md-6 col-lg-4'>
                    <div class='contact-realtor-wrapper'>
                        <div class='realtor-info'>
                            <div class='realtor---info'>
                            <span>
                                <h2>£ $pro_price/night</h2>
                                <p>?????? </p>
                                </span>
                                
                            </div>
                            <div class='realtor--contact-form'>
                                <form action='single-listings.php' method='post'>
                                    <div class='form-group'>
                                        <input type='date' class='form-control' id='realtor-name' placeholder='Check-in'>
                                    </div>
                                    <div class='form-group'>
                                        <input type='date' class='form-control' id='realtor-number' placeholder='Check-out>
                                    </div>
                                    <div class='form-group'>
                                        <input type='number'class='form-control' id='realtor-email' placeholder='Guests'>
                                    </div>
                                    
                                    </div>
                                    <button type='submit' name='continue'class='btn south-btn'>Continue</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
    </section>";

            echo($item_details);

            }

        }

    }


    public function getSliderProducts($query) {

       $stmt = $query;

       $result = $this->conn->query($stmt);

       if ($result->num_rows > 0) {

       while ($row_products = $result->fetch_assoc()) {
        
        $pro_id =  $row_products['product_id'];
        $pro_name= $row_products['product_name'];
        $pro_image1 = $row_products['product_image'];
        $pro_price = $row_products['price'];
        $pro_description = $row_products['description'];
        $pro_category = $row_products['category'];
        $pro_bathroom = $row_products['bathroom'];
        $pro_toilet = $row_products['toilet'];
        $pro_desc = $row_products['description'];
        $pro_location = $row_products['location'];

        $strlenght =  strlen($pro_desc);
        $out = substr($pro_desc,0,90);



        $item = " <div class='single-featured-property'>
                            <!-- Property Thumbnail -->
                            <a href='single-listings.php?pro_id=$pro_id'>
                            <div class='property-thumb'>
                                <img src='Adminpage/images/product_images/$pro_image1' alt='' style='width:1000px; height:250px;'>

                                <div class='tag'>
                                    <span>For Sale</span>
                                </div>
                                <div class='list-price'>
                                    <p>£ $pro_price</p>
                                </div>
                            </div>
                            <!-- Property Content -->
                            <div class='property-content'>
                                <h5>$pro_name</h5>
                                <p class='location'><img src='img/icons/location_tag.png' alt='' style='width:30px; height:30px;'>$pro_location</p>
                                <p>$out</p>
                                <div class='property-meta-data d-flex align-items-end justify-content-between'>
                                    <div class='new-tag'>
                                        <img src='img/icons/new_tag.png' alt=''style='width:20px; height:20px;'>
                                    </div>
                                    <div class='bathroom'>
                                        <img src='img/icons/shower.png' alt='' style='width:20px; height:20px;'>
                                        <span>$pro_bathroom</span>
                                    </div>
                                    <div class='garage'>
                                        <img src='img/icons/toilet1.png' alt='' style='width:20px; height:20px;'>
                                        <span>$pro_toilet</span>
                                    </div>    
                                </div>
                            </div>
                            </a>
                        </div>
                 ";

                 echo($item);




       
         }

       }else {
               echo "0 results";
             }
          


    }  
 
}
 
?>