// worksubcategory

if($_REQUEST['what']=="worksubcategory")
{
	if($_REQUEST['action']=="delete")
	{
		$del=$con->query("delete from worksubcategory where worksubcategoryid=$_REQUEST[id]");
	}
?>
	<div class="row">
	    <div class="col-md-4">
	        <h6>Form</h6>
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
	                <label>image</label>
	                <input class="form-control" type="file" name="upimage" value="<?php echo $row[3]; ?>"required />
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
	                <input class="form-control" type="text" name="upduration" value="<?php echo $row[6]; ?>"required />
	            </div>
	            <button class="btn btn-primary" name="upsendworksubcategory" type="submit">update</button>
	        </form>
			<?php
			}
			else
			{
	        ?>
	        <form action="" method="post" name="manageworksubcategory">
	            <div class="form-group">
	            	<div class="form-group">
	            		<select class="form-control" name="worksubcategoryid">
	        			<option>hiiii</option>
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
	                <input class="form-control" type="file" name="image" required />
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
	                <input class="form-control" type="text" name="duration" required />
	            </div>
	            <button class="btn btn-primary" name="sendworksubcategory" type="submit">Submit</button>
	        </form>
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
	                    <th>worksubcategoryid</th>
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
	                    <td><?php echo $roww[1]; ?></td>
	                    <td><?php echo $roww[2]; ?></td>
	                    <td><?php echo $row[3]; ?></td>
	                    <td><?php echo $row[4]; ?></td>
	                    <td><?php echo $row[5]; ?></td>
	                    <td><?php echo $row[6]; ?></td>
	                    <td><i ondblclick="getdata('worksubcategory', 'update',<?php echo $row[0]; ?>)" class="fa fa-refresh"></i></td>
	                    <td><i ondblclick="getdata('worksubcategory', 'delete',<?php echo $row[0]; ?>)" class="fa fa-trash"></i></td>
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