<?php 
require_once("connection.php");

$_SESSION['cpage']=$_REQUEST['what'];


//print_r($_REQUEST);


if($_REQUEST['what']=="dashboard")
{
?>

    <div class="row">
            <div class="col-xl-3 col-sm-6 col-12 d-flex">
                        <div class="card bg-one w-100">
                            <div class="card-body">
                                <div class="db-widgets d-flex justify-content-between align-items-center">
                                    <div class="db-icon">
                                        <i class="fas fa fa-registered"></i>
                                    </div>
                                    <div class="db-info">
                                        <h3>
                                        	<?php
                                        		$data=$con->query("select count(*) from saloonregister");
                                        		$row=mysqli_fetch_array($data);
                                        		echo $row[0];

                                        	?>
                                        </h3>
                                        <h6>total saloonregister</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-sm-6 col-12 d-flex">
                        <div class="card bg-one w-100">
                            <div class="card-body">
                                <div class="db-widgets d-flex justify-content-between align-items-center">
                                    <div class="db-icon">
                                        <i class="fas fa fa-percent"></i>
                                    </div>
                                    <div class="db-info">
                                        <h3>
                                        	<?php
                                        		$data=$con->query("select count(*) from offer");
                                        		$row=mysqli_fetch_array($data);
                                        		echo $row[0];

                                        	?>
                                        </h3>
                                        <h6>total offer</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-sm-6 col-12 d-flex">
                        <div class="card bg-one w-100">
                            <div class="card-body">
                                <div class="db-widgets d-flex justify-content-between align-items-center">
                                    <div class="db-icon">
                                        <i class="fas fa fa-list"></i>
                                    </div>
                                    <div class="db-info">
                                        <h3>
                                        	<?php
                                        		$data=$con->query("select count(*) from workcategory");
                                        		$row=mysqli_fetch_array($data);
                                        		echo $row[0];

                                        	?>
                                        </h3>
                                        <h6>total workcategory</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-sm-6 col-12 d-flex">
                        <div class="card bg-one w-100">
                            <div class="card-body">
                                <div class="db-widgets d-flex justify-content-between align-items-center">
                                    <div class="db-icon">
                                        <i class="fas fa fa-heart"></i>
                                    </div>
                                    <div class="db-info">
                                        <h3>
                                        	<?php
                                        		$data=$con->query("select count(*) from package");
                                        		$row=mysqli_fetch_array($data);
                                        		echo $row[0];

                                        	?>
                                        </h3>
                                        <h6>total package</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-sm-6 col-12 d-flex">
                        <div class="card bg-one w-100">
                            <div class="card-body">
                                <div class="db-widgets d-flex justify-content-between align-items-center">
                                    <div class="db-icon">
                                       <i class="fas fa fa-pinterest-p"></i>
                                    </div>
                                    <div class="db-info">
                                        <h3>
                                        	<?php
                                        		$data=$con->query("select count(*) from product");
                                        		$row=mysqli_fetch_array($data);
                                        		echo $row[0];

                                        	?>
                                        </h3>
                                        <h6>total product</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-sm-6 col-12 d-flex">
                        <div class="card bg-one w-100">
                            <div class="card-body">
                                <div class="db-widgets d-flex justify-content-between align-items-center">
                                    <div class="db-icon">
                                        <i class="fas fa fa-picture-o"></i>
                                    </div>
                                    <div class="db-info">
                                        <h3>
                                        	<?php
                                        		$data=$con->query("select count(*) from workgallery");
                                        		$row=mysqli_fetch_array($data);
                                        		echo $row[0];

                                        	?>
                                        </h3>
                                        <h6>total workgallery</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-sm-6 col-12 d-flex">
                        <div class="card bg-one w-100">
                            <div class="card-body">
                                <div class="db-widgets d-flex justify-content-between align-items-center">
                                    <div class="db-icon">
                                        <i class="fas fa fa-braille"></i>
                                    </div>
                                    <div class="db-info">
                                        <h3>
                                        	<?php
                                        		$data=$con->query("select count(*) from worksubcategory");
                                        		$row=mysqli_fetch_array($data);
                                        		echo $row[0];

                                        	?>
                                        </h3>
                                        <h6>total worksubcategory</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    </div>
	
                    
<?php
} 

//saloonregister

if($_REQUEST['what']=="saloonregister")
{
	if($_REQUEST['action']=="delete")
	{
		$del=$con->query("delete from saloonregister where saloonid=$_REQUEST[id]");
	}
?>
	<div class="row">
	    <div class="col-md-4">
	        <h6>saloonregister</h6>
	        <hr/>
	        <?php
	        if($_REQUEST['action']=="update")
	        {
	        	$data=$con->query("select * from saloonregister where saloonid=$_REQUEST[id]");
	        	$row=mysqli_fetch_array($data);
	        	$_SESSION['upsaloonid']=$row[0];
			?>
			<form action="" method="post" name="managesaloonregister">
	            <div class="form-group">
	                <label>name</label>
	                <input class="form-control" type="text" name="upname" value="<?php echo $row[1]; ?>" pattern="^[a-Z]$" required />
	            </div>

	            <div class="form-group">
	                <label>address</label>
	                <input class="form-control" type="text" name="upaddress" value="<?php echo $row[2]; ?>" required />
	            </div>
	            <div class="form-group">
	                <label>map</label>
	                <input class="form-control" type="text" name="upmap" value="<?php echo htmlspecialchars($row[3]); ?>" required />
	            </div>
	            
	            
	            <button class="btn btn-primary" name="upsendsaloonregister" type="submit">update</button>
	        </form>
			<?php
			}
			else
			{
	        ?>
	        
	        <?php
	        }
	        ?>
	    </div>
	    <div class="col-md-8">
	        <h6>Manage</h6>
	        <hr/>
	        <div class="table-responsive">
	            <table class="table table-hover">
	                <tr>
	                    <th>name</th>
	                    <th>address</th>
	                    <th>contact</th>
	                    <th>logo</th>
	                    <th>email</th>
	                    <th>openday</th>
	                    <th>opentime</th>
	                    <th>lastlogin</th>
	                    <th>update</th>
	                    <th>remove</th>
	                </tr>
	                <?php
	                     $data=$con->query("select * from saloonregister");
	                     while($row=mysqli_fetch_array($data))
	                     {
	                ?>
	                <tr>
	                    <td><?php echo $row[1]; ?></td>
	                    <td><?php echo $row[2]; ?></td>
	                    <td><?php echo $row[4]; ?></td>
	                    <td><img src="<?php echo $row[5]; ?>" height="50px" width="50px" /></td>
	                    <td><?php echo $row[6]; ?></td>
	                    <td><?php echo $row[7]; ?></td>
	                    <td><?php echo $row[8]; ?></td>
	                    <td><?php echo $row[9]; ?></td>
	                    <td><i ondblclick="getdata('saloonregister', 'update',<?php echo $row[0]; ?>)" class="fa fa-refresh"></i></td>
	                    <td><i ondblclick="getdata('saloonregister', 'delete',<?php echo $row[0]; ?>)" class="fa fa-trash"></i></td>
	                </tr>
	                <?php
	                     }
	                ?>
	            </table>
	        </div>
	    </div>
	</div>
<?php
}


//offer

if($_REQUEST['what']=="offer")
{
	if($_REQUEST['action']=="delete")
	{
		$del=$con->query("delete from offer where offerid=$_REQUEST[id]");
	}
	if($_REQUEST['action']=="deleteall")
	{
		$del=$con->query("delete from offer");
	}
?>
	<div class="row">
	    <div class="col-md-4">
	        <h6>offer</h6>
	        <hr/>
	        <?php
	        if($_REQUEST['action']=="update")
	        {
	        	$data=$con->query("select * from offer where offerid=$_REQUEST[id]");
	        	$row=mysqli_fetch_array($data);
	        	$_SESSION['upofferid']=$row[0];
			?>
			<form action="" method="post" name="manageoffer">
	            <div class="form-group">
	                <label>Offername</label>
	                <input class="form-control" type="text" name="upoffername" value="<?php echo $row[1]; ?>" pattern="^[a-Z]$" required />
	            </div>

	            <div class="form-group">
	                <label>Off</label>
	                <input class="form-control" type="text" name="upoff" value="<?php echo $row[2]; ?>"required />
	            </div>
	            
	            <div class="form-group">
	                <label>Startdate</label>
	                <input class="form-control" type="date" name="upstartdate" value="<?php echo $row[3];?>" required />
	            </div>
	            
	            <div class="form-group">
	                <label>Enddate</label>
	                <input class="form-control" type="date" name="upenddate" value="<?php echo $row[4];?> "required />
	            </div>

	            <button class="btn btn-primary" name="upsendoffer" type="submit">update</button>
	        </form>
			<?php
			}
			else
			{
	        ?>
	        <form action="" method="post" name="manageoffer">
	            <div class="form-group">
	                <label>Offername</label>
	                <input class="form-control" type="text" name="offername" pattern="^[a-Z]$" required />
	            </div>

	            <div class="form-group">
	                <label>Off</label>
	                <input class="form-control" type="text" name="off" required />
	            </div>
	            
	            <div class="form-group">
	                <label>Startdate</label>
	                <input class="form-control" type="date" name="startdate" required />
	            </div>
	            
	            <div class="form-group">
	                <label>Enddate</label>
	                <input class="form-control" type="date" name="enddate" required />
	            </div>

	            <button class="btn btn-primary" name="sendoffer" type="submit">Submit</button>
	        </form>
	        <?php
	        }
	        ?>
	    </div>
	    <div class="col-md-8">
	    	<div class="row">  
	        	<div class="col-md-10"><h6>Manage</h6></div>
	        	<div class="col-md-2"><i class="fas fa-solid fa-recycle" title="deleteall" ondblclick="getdata('offer', 'deleteall',0)"></i></div>
	        </div>
	        <hr/>
	        <div class="table-responsive">
	            <table class="table table-hover">
	                <tr>
	                    <th>Offername</th>
	                    <th>Off</th>
	                    <th>Startdate</th>
	                    <th>Enddate</th>
	                    <th>Update</th>
	                    <th>Remove</th>
	                </tr>
	                <?php
	                     $data=$con->query("select * from offer");
	                     while($row=mysqli_fetch_array($data))
	                     {
	                ?>
	                <tr>
	                    <td><?php echo $row[1]; ?></td>
	                    <td><?php echo $row[2]; ?></td>
	                    <td><?php echo $row[3]; ?></td>
	                    <td><?php echo $row[4]; ?></td>
	                    <td><i ondblclick="getdata('offer', 'update',<?php echo $row[0]; ?>)" class="fa fa-refresh"></i></td>
	                    <td><i ondblclick="getdata('offer', 'delete',<?php echo $row[0]; ?>)" class="fa fa-trash"></i></td>
	                </tr>
	                <?php
	                     }
	                ?>
	            </table>
	        </div>
	    </div>
	</div>
<?php
}




//workcategory

if($_REQUEST['what']=="workcategory")
{
	if($_REQUEST['action']=="delete")
	{
		$del=$con->query("delete from workcategory where workcategoryid=$_REQUEST[id]");
	}
	if($_REQUEST['action']=="deleteall")
	{
		$del=$con->query("delete from workcategory");
	}
?>
	<div class="row">
	    <div class="col-md-4">
	        <h6>workcategory</h6>
	        <hr/>
	        <?php
	        if($_REQUEST['action']=="update")
	        {
	        	$data=$con->query("select * from workcategory where workcategoryid=$_REQUEST[id]");
	        	$row=mysqli_fetch_array($data);
	        	$_SESSION['upworkcategoryid']=$row[0];
			?>
			<form action="" method="post" name="manageworkcategory">
	            <div class="form-group">
	                <label>name</label>
	                <input class="form-control" type="text" name="upname" value="<?php echo $row[1]; ?>" pattern="^[a-Z]$" required />
	            </div>
	            <button class="btn btn-primary" name="upsendworkcategory" type="submit">update</button>
	        </form>
			<?php
			}
			else
			{
	        ?>
	        <form action="" method="post" name="manageworkcategory" enctype="multipart/form-data">
	            <div class="form-group">
	                <label>name</label>
	                <input class="form-control" type="text" name="name" pattern="^[a-Z]$" required />
	            </div>

	            <div class="form-group">
	                <label>icon</label>
	                <input class="form-control" type="file" name="file" required />
	            </div>
	            <button class="btn btn-primary" name="sendworkcategory" type="submit">Submit</button>
	        </form>
	        <?php
	        }
	        ?>
	    </div>
	    <div class="col-md-8">
	        <div class="row">  
	        	<div class="col-md-10"><h6>Manage</h6></div>
	        	<div class="col-md-2"><i class="fas fa-solid fa-recycle" title="deleteall" ondblclick="getdata('workcategory', 'deleteall',0)"></i></div>
	        </div>
	        <hr/>
	        <div class="table-responsive">
	            <table class="table table-hover">
	                <tr>
	                    <th>name</th>
	                    <th>icon</th>
	                    <th>update</th>
	                    <th>remove</th>
	                </tr>
	                <?php
	                     $data=$con->query("select * from workcategory");
	                     while($row=mysqli_fetch_array($data))
	                     {
	                ?>
	                <tr>
	                    <td><?php echo $row[1]; ?></td>
	                    <td><img src="<?php echo $row[2]; ?>" height="90px" width="90px" /></td>
	                    <td><i ondblclick="getdata('workcategory', 'update',<?php echo $row[0]; ?>)" class="fa fa-refresh"></i></td>
	                    <td><i ondblclick="getdata('workcategory', 'delete',<?php echo $row[0]; ?>)" class="fa fa-trash"></i></td>
	                </tr>
	                <?php
	                     }
	                ?>
	            </table>
	        </div>
	    </div>
	</div>
<?php
}


//package

if($_REQUEST['what']=="package")
{
	if($_REQUEST['action']=="delete")
	{
		$del=$con->query("delete from package where packageid=$_REQUEST[id]");
	}
	if($_REQUEST['action']=="deleteall")
	{
		$del=$con->query("delete from package");
	}
?>
	<div class="row">
	    <div class="col-md-4">
	        <h6>package</h6>
	        <hr/>
	        <?php
	        if($_REQUEST['action']=="update")
	        {
	        	$data=$con->query("select * from package where packageid=$_REQUEST[id]");
	        	$row=mysqli_fetch_array($data);
	        	$_SESSION['uppackageid']=$row[0];
			?>
			<form action="" method="post" name="managepackage">
	            <div class="form-group">
	                <label>name</label>
	                <input class="form-control" type="text" name="upname" value="<?php echo $row[1]; ?>" pattern="^[a-Z]$" required />
	            </div>
	            <div class="form-group">
	                <label>price</label>
	                <input class="form-control" type="text" name="upprice" value="<?php echo $row[3]; ?>"required />
	            </div>
	            <div class="form-group">
	                <label>description</label>
	                <input class="form-control" type="text" name="updescription" value="<?php echo $row[4]; ?>"required />
	            </div>
	            <div class="form-group">
	                <label>duration</label>
	                <input class="form-control" type="text" name="upduration" value="<?php echo $row[5]; ?>"required />
	            </div>
	            <button class="btn btn-primary" name="upsendpackage" type="submit">update</button>
	        </form>
			<?php
			}
			else
			{
	        ?>
	        <form action="" method="post" name="managepackage" enctype="multipart/form-data">
	            <div class="form-group">
	                <label>name</label>
	                <input class="form-control" type="text" name="name" pattern="^[a-Z]$" required />
	            </div>

	            <div class="form-group">
	                <label>image</label>
	                <input class="form-control" type="file" name="file" required />
	            </div>
	            <div class="form-group">
	                <label>price</label>
	                <input class="form-control" type="text" name="price" required />
	            </div>
	            <div class="form-group">
	                <label>description</label>
	                <input class="form-control" type="text" name="description" required />
	            </div>
	            <div class="form-group">
	                <label>duration</label>
	                <input class="form-control" type="text" name="duration" required />
	            </div>
	            <button class="btn btn-primary" name="sendpackage" type="submit">Submit</button>
	        </form>
	        <?php
	        }
	        ?>
	    </div>
	    <div class="col-md-8">
	        <div class="row">  
	        	<div class="col-md-10"><h6>Manage</h6></div>
	        	<div class="col-md-2"><i class="fas fa-solid fa-recycle" title="deleteall" ondblclick="getdata('package', 'deleteall',0)"></i></div>
	        </div>
	        <hr/>
	        <div class="table-responsive overf">
	            <table class="table table-hover">
	                <tr>
	                    <th>name</th>
	                    <th>image</th>
	                    <th>price</th>
	                    <th>description</th>
	                    <th>duration</th>
	                    <th>update</th>
	                    <th>remove</th>
	                </tr>
	                <?php
	                     $data=$con->query("select * from package");
	                     while($row=mysqli_fetch_array($data))
	                     {
	                ?>
	                <tr>
	                    <td><?php echo $row[1]; ?></td>
	                    <td><img src="<?php echo $row[2]; ?>" height="90px" width="90px" /></td>
	                    <td><?php echo $row[3]; ?></td>
	                    <td><?php echo $row[4]; ?></td>
	                    <td><?php echo $row[5]; ?></td>
	                    <td><i ondblclick="getdata('package', 'update',<?php echo $row[0]; ?>)" class="fa fa-refresh"></i></td>
	                    <td><i ondblclick="getdata('package', 'delete',<?php echo $row[0]; ?>)" class="fa fa-trash"></i></td>
	                </tr>
	                <?php
	                     }
	                ?>
	            </table>
	        </div>
	    </div>
	</div>
<?php
}


//product

if($_REQUEST['what']=="product")
{
	if($_REQUEST['action']=="delete")
	{
		$del=$con->query("delete from product where productid=$_REQUEST[id]");
	}
	if($_REQUEST['action']=="deleteall")
	{
		$del=$con->query("delete from product");
	}
?>
	<div class="row">
	    <div class="col-md-4">
	        <h6>product</h6>
	        <hr/>
	        <?php
	        if($_REQUEST['action']=="update")
	        {
	        	$data=$con->query("select * from product where productid=$_REQUEST[id]");
	        	$row=mysqli_fetch_array($data);
	        	$_SESSION['upproductid']=$row[0];
			?>
			<form action="" method="post" name="manageproduct">
	            <div class="form-group">
	                <label>name</label>
	                <input class="form-control" type="text" name="upname" value="<?php echo $row[1]; ?>" pattern="^[a-Z]$" required />
	            </div>
	            <div class="form-group">
	                <label>price</label>
	                <input class="form-control" type="text" name="upprice" value="<?php echo $row[2]; ?>"required />
	            </div>
	            <div class="form-group">
	                <label>description</label>
	                <input class="form-control" type="text" name="updescription" value="<?php echo $row[4]; ?>"required />
	            </div>
	            <button class="btn btn-primary" name="upsendproduct" type="submit">update</button>
	        </form>
			<?php
			}
			else
			{
	        ?>
	        <form action="" method="post" name="manageproduct" enctype="multipart/form-data">
	            <div class="form-group">
	                <label>name</label>
	                <input class="form-control" type="text" name="name" pattern="^[a-Z]$" required />
	            </div>
	            <div class="form-group">
	                <label>price</label>
	                <input class="form-control" type="text" name="price" required />
	            </div>
	            <div class="form-group">
	                <label>image</label>
	                <input class="form-control" type="file" name="file" required />
	            </div>
	            
	            <div class="form-group">
	                <label>description</label>
	                <input class="form-control" type="text" name="description" required />
	            </div>
	            
	            <button class="btn btn-primary" name="sendproduct" type="submit">Submit</button>
	        </form>
	        <?php
	        }
	        ?>
	    </div>
	    <div class="col-md-8">
	    	<div class="row">  
	        	<div class="col-md-10"><h6>Manage</h6></div>
	        	<div class="col-md-2"><i class="fas fa-solid fa-recycle" title="deleteall" ondblclick="getdata('product', 'deleteall',0)"></i></div>
	        </div>
	        <hr/>
	        
	        <div class="table-responsive">
	            <table class="table table-hover">
	                <tr>
	                    <th>name</th>
	                    <th>price</th>
	                    <th>image</th>
	                    <th>description</th>
	                    <th>update</th>
	                    <th>remove</th>
	                </tr>
	                <?php
	                     $data=$con->query("select * from product");
	                     while($row=mysqli_fetch_array($data))
	                     {
	                ?>
	                <tr>
	                    <td><?php echo $row[1]; ?></td>
	                    <td><?php echo $row[2]; ?></td>
	                    <td><img src="<?php echo $row[3]; ?>" height="90px" width="100px" /></td>
	                    <td><?php echo $row[4]; ?></td>
	                    <td><i ondblclick="getdata('product', 'update',<?php echo $row[0]; ?>)" class="fa fa-refresh"></i></td>
	                    <td><i ondblclick="getdata('product', 'delete',<?php echo $row[0]; ?>)" class="fa fa-trash"></i></td>
	                </tr>
	                <?php
	                     }
	                ?>
	            </table>
	        </div>
	    </div>
	</div>
<?php
}

//workgallery

if($_REQUEST['what']=="workgallery")
{
	if($_REQUEST['action']=="delete")
	{
		$del=$con->query("delete from workgallery where workgalleryid=$_REQUEST[id]");
	}
	if($_REQUEST['action']=="deleteall")
	{
		$del=$con->query("delete from workgallery");
	}
?>
	<div class="row">
	    <div class="col-md-4">
	        <h6>workgallery</h6>
	        <hr/>
	        <?php
	        if($_REQUEST['action']=="update")
	        {
	        	$data=$con->query("select * from workgallery where workgalleryid=$_REQUEST[id]");
	        	$row=mysqli_fetch_array($data);
	        	$_SESSION['upworkgalleryid']=$row[0];
			?>
			<form action="" method="post" name="manageworkgallery">
	             
	            <button class="btn btn-primary" name="upsendworkgallery" type="submit">update</button>
	        </form>
			<?php
			}
			else
			{
	        ?>
	        <form action="" method="post" name="manageworkgallery" enctype="multipart/form-data">
	        	<div class="form-group">
	        		<select class="form-control" name="workcategory" required>
	        			<option value="">--Select Workcategory--</option>
	        			<?php
	        			  $data=$con->query("select * from workcategory");
	        			  while($row=mysqli_fetch_array($data))
	        			{
	        			?>
	        			<option value="<?php echo $row[0];?>"> <?php echo $row[1];?></option>
	        			<?php
	        			}
	        			?>
	        		</select>
	            </div>
	            <div class="form-group">
	                <label>image</label>
	                <input class="form-control" type="file" name="file" required />
	            </div>
	            <button class="btn btn-primary" name="sendworkgallery" type="submit">Submit</button>
	        </form>
	        <?php
	        }
	        ?>
	    </div>
	    <div class="col-md-8">
	        <div class="row">  
	        	<div class="col-md-10"><h6>Manage</h6></div>
	        	<div class="col-md-2"><i class="fas fa-solid fa-recycle" title="deleteall" ondblclick="getdata('workgallery', 'deleteall',0)"></i></div>
	        </div>
	        <hr/>
	        <div class="table-responsive">
	            <table class="table table-hover">
	                <tr>
	                    <th>workcategoryid</th>
	                    <th>image</th>
	                    <th>remove</th>
	                    
	                </tr>
	                <?php
	                     $data=$con->query("select * from workgallery");
	                     while($row=mysqli_fetch_array($data))
	                     {
	                ?>
	                <tr>
	                	<?php
	                		$dt=$con->query("select * from workcategory where workcategoryid=$row[0]");
	                		$roww=mysqli_fetch_array($dt);
	                	?>
	                    <td><?php echo $roww[1]; ?></td>
	                 	<td><img src="<?php echo $row[2]; ?>" height="90px" width="100px" /></td>
	                    <td><i ondblclick="getdata('workgallery','delete',<?php echo $row[1]; ?>)" class="fa fa-trash"></i></td>
	                </tr>
	                <?php
	                     }
	                ?>
	            </table>
	        </div>
	    </div>
	</div>
<?php
}

// worksubcategory

if($_REQUEST['what']=="worksubcategory")
{
	if($_REQUEST['action']=="delete")
	{
		$del=$con->query("delete from worksubcategory where worksubcategoryid=$_REQUEST[id]");
	}
	if($_REQUEST['action']=="deleteall")
	{
		$del=$con->query("delete from worksubcategory");
	}
?>
	<div class="row">
	    <div class="col-md-4">
	        <h6>worksubcategory</h6>
	        <hr/>
	        <?php
	        if($_REQUEST['action']=="update")
	        {
	        	$data=$con->query("select * from worksubcategory where worksubcategoryid=$_REQUEST[id]");
	        	$row=mysqli_fetch_array($data);
	        	$_SESSION['upworksubcategoryid']=$row[0];
			?>
			<form action="" method="post" name="manageworksubcategory">
	            <div class="form-group">
	                <label>workcategoryid</label>
	                <input class="form-control" type="" name="upworkcategoryid" value="<?php echo $row[0]; ?>" pattern="^[a-Z]$" required />
	            </div>
	            <div class="form-group">
	                <label>name</label>
	                <input class="form-control" type="text" name="upname" value="<?php echo $row[2]; ?>"required />
	            </div>
	            
	            <div class="form-group">
	                <label>description</label>
	                <input class="form-control" type="text" name="updescription" value="<?php echo $row[4]; ?>"required />
	            </div>
	            <div class="form-group">
	                <label>price</label>
	                <input class="form-control" type="text" name="upprice" value="<?php echo $row[5]; ?>"required />
	            </div>
	            <div class="form-group">
	                <label>duration</label>
	                <input class="form-control" type="time" name="upduration" value="<?php echo $row[6]; ?>"required />
	            </div>
	            <button class="btn btn-primary" name="upsendworksubcategory" type="submit">update</button>
	        </form>
			<?php
			}
			else
			{
	        ?>
	        <form action="" method="post" name="manageworksubcategory" enctype="multipart/form-data">
	            <div class="form-group">
	            	<div class="form-group">
	            		<select class="form-control" name="workcategory" required>
	        			<option value="">--Select Workcategory--</option>
	        			<?php
	        			  $data=$con->query("select * from workcategory");
	        			  while($row=mysqli_fetch_array($data))
	        			{
	        			?>
	        			<option value="<?php echo $row[0];?>"> <?php echo $row[1];?></option>
	        			<?php
	        			}
	        			?>
	        		</select>
	                
	            </div>
	                <label>name</label>
	                <input class="form-control" type="text" name="name" pattern="^[a-Z]$" required />
	            </div>
	            <div class="form-group">
	                <label>image</label>
	                <input class="form-control" type="file" name="file" required />
	            </div>
	            <div class="form-group">
	                <label>description</label>
	                <input class="form-control" type="text" name="description" required />
	            </div>
	            <div class="form-group">
	                <label>price</label>
	                <input class="form-control" type="text" name="price" required />
	            </div>
	            <div class="form-group">
	                <label>duration</label>
	                <input class="form-control" type="time" name="duration" required />
	            </div>
	            <button class="btn btn-primary" name="sendworksubcategory" type="submit">Submit</button>
	        </form>
	        <?php
	        }
	        ?>
	    </div>
	    <div class="col-md-8">
	        <div class="row">  
	        	<div class="col-md-10"><h6>Manage</h6></div>
	        	<div class="col-md-2"><i class="fas fa-solid fa-recycle" title="deleteall" ondblclick="getdata('worksubcategory', 'deleteall',0)"></i></div>
	        </div>
	        <hr/>
	        
	        <div class="table-responsive">
	            <table class="table table-hover">
	                <tr>
	                    <th>workcategoryid</th>
	                    <th>name</th>
	                    <th>image</th>
	                    <th>description</th>
	                    <th>price</th>
	                    <th>duration</th>
	                    <th>update</th>
	                    <th>remove</th>
	                </tr>
	                <?php
	                     $data=$con->query("select * from worksubcategory");
	                     while($row=mysqli_fetch_array($data))
	                     {
	                ?>
	                <tr>
	                	<?php
		                	$da=$con->query("select * from workcategory where workcategoryid=$row[0]");
		                	$roww=mysqli_fetch_array($da);
	                	?>
	                    <td><?php echo $roww[1]; ?></td>
	                    <td><?php echo $row[2]; ?></td>
	                    <td><img src="<?php echo $row[3]; ?>" height="50px" width="50px" /></td>
	                    <td><?php echo $row[4]; ?></td>
	                    <td><?php echo $row[5]; ?></td>
	                    <td><?php echo $row[6]; ?></td>
	                    <td><i ondblclick="getdata('worksubcategory', 'update',<?php echo $row[1]; ?>)" class="fa fa-refresh"></i></td>
	                    <td><i ondblclick="getdata('worksubcategory', 'delete',<?php echo $row[1]; ?>)" class="fa fa-trash"></i></td>
	                </tr>
	                <?php
	                     }
	                ?>
	            </table>
	        </div>
	    </div>
	</div>
<?php
}

//feedback

if($_REQUEST['what']=="feedback")
{
	if($_REQUEST['action']=="delete")
	{
		$del=$con->query("delete from feedback where feedbackid=$_REQUEST[id]");
	}
	if($_REQUEST['action']=="deleteall")
	{
		$del=$con->query("delete from feedback");
	}
?>
	
	  
	    <div class="col-md-12">
	        <div class="row">  
	        	<div class="col-md-10"><h6>Manage</h6></div>
	        	<div class="col-md-2"><i class="fas fa-solid fa-recycle" title="deleteall" ondblclick="getdata('feedback', 'deleteall',0)"></i></div>
	        </div>
	        <hr/>
	        <div class="table-responsive">
	            <table class="table table-hover">
	                <tr>
	                    <th>name</th>
	                    <th>message</th>
	                    <th>fdatetime</th>	                   
	                 	<th>remove</th>
	                </tr>
	                <?php
	                     $data=$con->query("select * from feedback");
	                     while($row=mysqli_fetch_array($data))
	                     {
	                ?>
	                <tr>
	                    <td><?php echo $row[1]; ?></td>
	                    <td><?php echo $row[2]; ?></td>
	                    <td><?php echo $row[3]; ?></td>

	                    <td><i ondblclick="getdata('feedback', 'delete',<?php echo $row[0]; ?>)" class="fa fa-trash"></i></td>
	                </tr>
	                <?php
	                     }
	                ?>
	            </table>
	        </div>
	    </div>
	
<?php
}


//userregister

if($_REQUEST['what']=="userregister")
{
	if($_REQUEST['action']=="delete")
	{
		$del=$con->query("delete from userregister where userid=$_REQUEST[id]");
	}
	if($_REQUEST['action']=="deleteall")
	{
		$del=$con->query("delete from userregister");
	}
?>
	
	  
	    <div class="col-md-12">
	        <div class="row">  
	        	<div class="col-md-10"><h6>Manage</h6></div>
	        	<div class="col-md-2"><i class="fas fa-solid fa-recycle" title="deleteall" ondblclick="getdata('worksubcategory', 'deleteall',0)"></i></div>
	        </div>
	        <hr/>
	        <div class="table-responsive">
	            <table class="table table-hover">
	                <tr>
	                    <th>name</th>
	                    <th>address</th>
	                    <th>contact</th>
	                    <th>email</th>
	                     <th>lastlogin</th>
	                    <th>remove</th>
	                </tr>
	                <?php
	                     $data=$con->query("select * from userregister");
	                     while($row=mysqli_fetch_array($data))
	                     {
	                ?>
	                <tr>
	                    <td><?php echo $row[1]; ?></td>
	                    <td><?php echo $row[2]; ?></td>
	                    <td><?php echo $row[3]; ?></td>
	                    <td><?php echo $row[4]; ?></td>
	                    <td><?php echo $row[5]; ?></td>

	                    <td><i ondblclick="getdata('userregister', 'delete',<?php echo $row[0]; ?>)" class="fa fa-trash"></i></td>
	                </tr>
	                <?php
	                     }
	                ?>
	            </table>
	        </div>
	    </div>
	
<?php
}

//ratereview

if($_REQUEST['what']=="ratereview")
{
	if($_REQUEST['action']=="delete")
	{
		$del=$con->query("delete from ratereview where ratereviewid=$_REQUEST[id]");
	}
	if($_REQUEST['action']=="deleteall")
	{
		$del=$con->query("delete from ratereview");
	}
?>
	
	  
	    <div class="col-md-12">
	        <div class="row">  
	        	<div class="col-md-10"><h6>Manage</h6></div>
	        	<div class="col-md-2"><i class="fas fa-solid fa-recycle" title="deleteall" ondblclick="getdata('ratereview', 'deleteall',0)"></i></div>
	        </div>
	        <hr/>
	        <div class="table-responsive">
	            <table class="table table-hover">
	                <tr>

                    <th>User</th>
                    <th>Category</th>
                    <th>Rate</th>
                    <th>Review</th>
                    <th>Datetime</th>
                    <th>Remove</th>
                </tr>
                <?php
                        $data=$con->query("select * from ratereview");
                        while($row=mysqli_fetch_array($data))
                        {
	            ?>
                <tr>
                    <?php
                    $dt=$con->query("select * from userregister where userid=$row[0]");
                    $roww=mysqli_fetch_array($dt);
                    ?>
                    <td><?php echo $roww[1]; ?></td>

                    <?php
                    $dt=$con->query("select * from worksubcategory where worksubcategoryid=$row[1]");
                    $rowww=mysqli_fetch_array($dt);
                    ?>
                    <td><?php echo $rowww[2]; ?></td>
                    

                    <td><?php  
                    for($i=1;$i<=5;$i++)
                    {
                        if($i<=$row[3])
                        {
                    ?>
                        <i class="fas fa-star filled" style="color: #be9355"></i>
                    <?php
                        }
                        else
                        {
                            ?>
                            <i class="fas fa-star filled" style="color: grey" ></i>
                            <?php
                        }
                    }
                    ?> </td>
                    <td><?php echo $row[4]; ?></td>
                    <td><?php echo $row[5]; ?></td>

                    <td><i ondblclick="getdata('ratereview', 'delete',<?php echo $row[2]; ?>)"
                            class="fa fa-trash"></i></td>
                </tr>
	                <?php
	                     }
	                ?>
	            </table>
	        </div>
	    </div>
	
<?php
}


?>