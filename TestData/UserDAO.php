<?php
include("D:\\Temp\\@\\Github\\TestData\\systemConfig.php");
class userResources
{
    private $dbReference;
    var $dbConnect;
    var $result;

    /**
     *
     */
    function __construct()
    {

    }

    function __destruct()
    {

    }

    //get images
    function getAllUserResource()
    {
        $this->dbReference = new systemConfig();
        $this->dbConnect = $this->dbReference->connectDB();
        if ($this->dbConnect == NULL) {
            $this->dbReference->sendResponse(503, '{"error_message": ' . $this->dbReference->getStatusCodeMeeage(503) . '}');
        } else {

            $sql = "SELECT * FROM users";
            //$number_per_user = $_POST["number_per_page"];
            //$page = ($_POST["page"] - 1) * $number_per_page + 1;
            //$page_next = $_POST["page"] * $number_per_page;
//echo "$page";

            //if ($page != NULL && $number_per_page != NULL) {
//echo "viva for";
            //    $sql = "SELECT * FROM users WHERE";
            //}
            /*else{
            echo "0 results";
            return;
            }*/
            $this->result = $this->dbConnect->query($sql);
            if ($this->result->num_rows > 0) {
// output data of each row
                $resultSet = array();
                while ($row = $this->result->fetch_assoc()) {
                    $resultSet[] = $row;
                }
                //echo json_encode(array('users' => $resultSet));
                $this->dbReference->sendResponse(200, '{"items":' . json_encode($resultSet) . '}');
            } else {
//echo "0 results";
                $this->dbReference->sendResponse(200, '{"items":null}');
                //echo "ko co data";
            }

        }
    }
}

?>