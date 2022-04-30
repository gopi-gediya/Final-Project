<?php 
require_once("connection.php");


    if(isset($_REQUEST['feedback']))
    {
        $in=$con->query("insert into feedback values(0,'$_REQUEST[name]','$_REQUEST[message]','$_REQUEST[fdatetime]')");
    }
?>
<!DOCTYPE html>

<html>
<?php require_once("head.php");?>
<?php require_once("header.php");?>
<body>
<div class="display-table">
        <div class="display-table-cell">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-md-3">
                
                <form name="reg-form" class="register-form form-transparent" method="post">
                  <div class="row">
                    <div class="form-group col-md-6 textbox">
                      <label for="form_name">Name</label><br/>
                      <input type="text" name="name" id="" required>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-6 textbox">
                     <label for="form_name">Message</label>
                      <input type="text" name="message" id="" required>
                    </div> 
                     <div class="form-group col-md-6 textbox">
                     <label for="form_name">Fdatetime</label>
                      <input type="datetime-local" name="fdatetime" id="" required>
                    </div>
                  <div class="form-group">
                   <button class="btn btn-primary btn-block" type="submit" name="feedback">Send Feedback</button>
                   </div>
                </form>
                    <div>
               <img  class="img-fullwidth mt-40" src="images/about/fd.jpg" alt="" width="600px" >
           </div>
              </div>
              
            </div>
        
           
              <div class="col-md-6 col-md-push-3">
                
                <div>
                    <h3>FeedBack Us</h3>
                    <h4>When to Ask Feedback</h4>
            <p>The next, and at the same time very important tip is WHEN to ask feedback. If you want honest feedback, you should know when exactly you should ask for it.<br/>
            If you need feedback about the exact procedure or treatment. you’ll need to ask for feedback right after it. If you need feedback about the salon in general, it can be asked every 6 months.<br/> NPS (Net Promoter Score) can be asked every 6 months. NPS will show how likely are your customers to refer your salon to others.<br/>Recently a new trend of asking feedback has emerged. You ask a question at first visit, then another question at the second visit, then a third and build a complete client profile over time, without overwhelming clients with many questions at the same time. This approach was fully integrated into the RetentionForce’s feedback feature.<br/>The most common feedback refers to customer satisfaction after the procedure. The experience in RetentionForce has shown us exactly when that particular feedback should be asked. After a few thousand experiments we measured the average time when the feedback should be asked to maximize the response rate. .It is the 82nd second after the client has left the salon.<br/>There is real magic behind this exact number. At this point, the client still remembers all the details of the treatment, is already out of the salon (to avoid positive feedback just out of politeness) and still thinks about the procedure.<br/>There is real magic behind this exact number. At this point, the client still remembers all the details of the treatment, is already out of the salon (to avoid positive feedback just out of politeness) and still thinks about the procedure.</p>
            <h4>Measure & Improve</h4>
            <p>Well, you have gathered a significant amount of feedback, what is next? The most common mistake that most businesses make is not using the gathered feedback properly.<br/>There might be negative feedback that needs an immediate solution, other issues can be found out while visualizing the data. In the second case, volume matters. If 75% of your customers complain about a product you use and think it’s a perfect option, you need to listen up.<br/>
            Use the collected customer feedback to:<br/>Optimize staff performance<br/>Better understand your ideal customers<br/>Create personalized client profiles<br/>Improve the quality of services<br/>Review products<br/>Ensure customer retention<br/>There might be negative feedback that needs an immediate solution, other issues can be found out while visualizing the data. In the second case, volume matters. If 75% of your customers complain about a product you think is perfect, you need to listen up.<br/>Customer feedback is a valuable part of staff optimization, as you can know for sure who are your best-performing employees and who needs assistance and further training. Calculate average feedback for each staff member to have a better understanding of the staff performance.<br/>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</body>

<?php require_once("footer.php");?>
<?php require_once("scripts.php");?>

</html>
