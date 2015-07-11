<?php 
$upload_dir="uploads/userId/images/";//replace userId with login session ID
if (!is_dir($upload_dir)) {
        mkdir($upload_dir,0777);
    }

else
{
    if (isset($_POST['submit']))
    {
        $filepath=array();
        
        if (isset($_POST['story'])) {
         $data=$_POST['story'];
        }
        $jsonData=array("story"=>$data,"img"=>array());
        if(isset($_FILES["file"]["type"]))
        { 
            for ($i = 0; $i < count($_FILES['file']['name']); $i++) 
            {
                $validextensions = array("jpeg", "jpg", "png", "gif");
                $temporary = explode(".", $_FILES["file"]["name"][$i]);
                $file_extension = end($temporary);
                $sourcePath = $_FILES['file']['tmp_name'][$i]; // Storing source path of the file in a variable
                $filename = rand().$_FILES['file']['name'][$i];
                $targetPath = $upload_dir.$filename;// Target path where file is to be stored
                array_push($filepath, $targetPath); 
                move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file remove comment once done
                storeInDb($file_extension,$targetPath,$filename);
                
            }
            array_push($jsonData['img'], $filepath);
            echo(json_encode($jsonData));
        } 
    }
}  
function storeInDb($extension,$path,$name)
{
    $con = mysql_connect('localhost', '', '');
    mysql_select_db('test', $con);
    if(!$con){
        die("error");
    }
    $query="INSERT INTO imguploads(image_id,image_type, image, image_link, image_ctgy, image_name) VALUES ('','{$extension}','','{$path}','','{$name}')";
    $result=mysql_query($query);
    if (!$result)
    {
        die("Database query failed");
        # code...
    }
    mysql_close($con);
}

?>