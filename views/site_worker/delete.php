<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/site/worker/index">List</a></li>
                 




				 <li>  <a href="/site/worker/create" > Add</a></li>
                   
				   <li class="active">Delete</li>
                
				</ol>
            </div>
<div class="col-sm-4 col-sm-offset-4 padding-right">
            <h4>Delete #<?php echo $id; ?></h4>

            <p>Really Delete?</p>

            <form method="post">
                <input type="submit" name="submit" value="Delete" class="btn btn-default"/>
            </form>
</div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>

