<?php 
require_once("connection.php");

//saloonregister
if(isset($_REQUEST['sendsaloonregister']))
   {
      if($_FILES['file']['type']=="image/jpg" || $_FILES['file']['type']=="image/jpeg" || $_FILES['file']['type']=="image/png")
      {
         // rename
         $newfile="Saloonregister_".rand(0,99).rand(100,199).chr(rand(65,90)).".".substr($_FILES['file']['type'], 6);
         
         $serverpath=dirname(__FILE__)."\\Images\\".$newfile;
         $databasepath="Images/".$newfile;

         if(move_uploaded_file($_FILES['file']['tmp_name'], $serverpath))
         {
            if(isset($_REQUEST['sendsaloonregister']))
            {
               $in=$con->query("insert into saloonregister values(0,'$_REQUEST[name]','$_REQUEST[address]','$_REQUEST[map]','$_REQUEST[contact]','$databasepath','$_REQUEST[email]','$_REQUEST[openday]',$_REQUEST[opentime],$_REQUEST[lastlogin])");
            }
         }
      }  
   }


if(isset($_REQUEST['upsendsaloonregister']))
{
   $up=$con->query("update saloonregister set name='$_REQUEST[upname]',address='$_REQUEST[upaddress]',map='$_REQUEST[upmap]' where packageid=$_SESSION[upsaloonid]");
} 

//offer

if(isset($_REQUEST['sendoffer']))
{
   $in=$con->query("insert into offer values(0,'$_REQUEST[offername]',$_REQUEST[off],'$_REQUEST[startdate]','$_REQUEST[enddate]')");
}
if(isset($_REQUEST['upsendoffer']))
{
   $up=$con->query("update offer set offername='$_REQUEST[upoffername]',off=$_REQUEST[upoff],startdate='$_REQUEST[upstartdate]',enddate='$_REQUEST[upenddate]' where offerid=$_SESSION[upofferid]");
}

//workcategory

if(isset($_REQUEST['sendworkcategory']))
   {
      if($_FILES['file']['type']=="image/jpg" || $_FILES['file']['type']=="image/jpeg" || $_FILES['file']['type']=="image/png")
      {
         // rename
         $newfile="Workcategory_".rand(0,99).rand(100,199).chr(rand(65,90)).".".substr($_FILES['file']['type'], 6);
         
         $serverpath=dirname(__FILE__)."\\Images\\".$newfile;
         $databasepath="Images/".$newfile;

         if(move_uploaded_file($_FILES['file']['tmp_name'], $serverpath))
         {
            if(isset($_REQUEST['sendworkcategory']))
            {
               $in=$con->query("insert into workcategory values(0,'$_REQUEST[name]','$databasepath')");
            }
         }
      }  
   }

if(isset($_REQUEST['upsendworkcategory']))
{
   $up=$con->query("update workcategory set name='$_REQUEST[upname]' where workcategoryid=$_SESSION[upworkcategoryid]");
}


//package

if(isset($_REQUEST['sendpackage']))
   {
      if($_FILES['file']['type']=="image/jpg" || $_FILES['file']['type']=="image/jpeg" || $_FILES['file']['type']=="image/png")
      {
         // rename
         $newfile="Package_".rand(0,99).rand(100,199).chr(rand(65,90)).".".substr($_FILES['file']['type'], 6);
         
         $serverpath=dirname(__FILE__)."\\Images\\".$newfile;
         $databasepath="Images/".$newfile;

         if(move_uploaded_file($_FILES['file']['tmp_name'], $serverpath))
         {
            if(isset($_REQUEST['sendpackage']))
            {
               $in=$con->query("insert into package values(0,'$_REQUEST[name]','$databasepath',$_REQUEST[price],'$_REQUEST[description]','$_REQUEST[duration]')");
            } 
         }
      }  
   }


if(isset($_REQUEST['upsendpackage']))
{
   $up=$con->query("update package set name='$_REQUEST[upname]',price=$_REQUEST[upprice],description='$_REQUEST[updescription]',duration='$_REQUEST[upduration]' where packageid=$_SESSION[uppackageid]");
}


//product

if(isset($_REQUEST['sendproduct']))
   {
      if($_FILES['file']['type']=="image/jpg" || $_FILES['file']['type']=="image/jpeg" || $_FILES['file']['type']=="image/png")
      {
         // rename
         $newfile="Product_".rand(0,99).rand(100,199).chr(rand(65,90)).".".substr($_FILES['file']['type'], 6);
         
         $serverpath=dirname(__FILE__)."\\Images\\".$newfile;
         $databasepath="Images/".$newfile;

         if(move_uploaded_file($_FILES['file']['tmp_name'], $serverpath))
         {
           if(isset($_REQUEST['sendproduct']))
            {
               $in=$con->query("insert into product values(0,'$_REQUEST[name]',$_REQUEST[price],'$databasepath','$_REQUEST[description]')");
            } 
         }
      }  
   }

if(isset($_REQUEST['upsendproduct']))
{
   $up=$con->query("update product set name='$_REQUEST[upname]',price=$_REQUEST[upprice],description='$_REQUEST[updescription]' where productid=$_SESSION[upproductid]");
}

//workgallery

if(isset($_REQUEST['sendworkgallery']))
   {
      if($_FILES['file']['type']=="image/jpg" || $_FILES['file']['type']=="image/jpeg" || $_FILES['file']['type']=="image/png")
      {
         // rename
         $newfile="Workgallery_".rand(0,99).rand(100,199).chr(rand(65,90)).".".substr($_FILES['file']['type'], 6);
         
         $serverpath=dirname(__FILE__)."\\Images\\".$newfile;
         $databasepath="Images/".$newfile;

         if(move_uploaded_file($_FILES['file']['tmp_name'], $serverpath))
         {
            if(isset($_REQUEST['sendworkgallery']))
            {
               $in=$con->query("insert into workgallery values('$_REQUEST[workcategory]',0,'$databasepath')");
            }
         }
      }  
   }

if(isset($_REQUEST['upsendworkcategory']))
{
   $up=$con->query("update workgallery set workcategoryid='$_REQUEST[upworkcategoryid]' where workgalleryid=$_SESSION[upworkgalleryid]");
}

//worksubcategory
if(isset($_REQUEST['sendworksubcategory']))
   {
      if($_FILES['file']['type']=="image/jpg" || $_FILES['file']['type']=="image/jpeg" || $_FILES['file']['type']=="image/png")
      {
         // rename
         $newfile="Worksubcategory_".rand(0,99).rand(100,199).chr(rand(65,90)).".".substr($_FILES['file']['type'], 6);
         
         $serverpath=dirname(__FILE__)."\\Images\\".$newfile;
         $databasepath="Images/".$newfile;

         if(move_uploaded_file($_FILES['file']['tmp_name'], $serverpath))
         {
            if(isset($_REQUEST['sendworksubcategory']))
            {
               $in=$con->query("insert into worksubcategory values('$_REQUEST[workcategory]',0,'$_REQUEST[name]','$databasepath','$_REQUEST[description]',$_REQUEST[price],'$_REQUEST[duration]')");
            }
         }
      }  
   }

if(isset($_REQUEST['upsendworksubcategory']))
{
   $up=$con->query("update worksubcategory set workcategoryid='$_REQUEST[upworkcategoryid]',name='$_REQUEST[upname]',description='$_REQUEST[updescription]',price=$_REQUEST[upprice],duration='$_REQUEST[upduration]' where worksubcategoryid=$_SESSION[upworksubcategoryid]");
}

?>