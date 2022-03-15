<?php $this->titre = "Edit";?>
<div class="container">
     <div class="card">
        <div class="card-header">
         <h3>Edit student </h3>
        </div>
        <div class="card-footer">
<?php foreach ($onestudent as $book) {?>
         <form class="" method="post" action="index.php?action=liststudent">
           <div class="mb-3">
             <label class="form-label">Name </label>
             <input class="form-control" type="text" name="name" id="name" value="<?php echo $book->getName(); ?>" >
           </div>
           <div class="mb-3">
             <label class="form-label">lastname </label>
             <input class="form-control" type="text" name="lastname" id="lastname" value="<?php echo $book->getlastname(); ?>"  >
          </div>
          <div class="mb-3">
           <label class="form-label">age </label>
           <input class="form-control" type="text" name="age" id="age" value="<?php echo $book->getage(); ?>" >
          </div>
          <div class="mb-3">
           <label class="form-label">cne </label>
           <input class="form-control" type="text" name="cne" id="cne" value="<?php echo $book->getcne(); ?>" >
          </div>
          <div class="text-end mr-5">
            <input type="submit" class="btn btn-dark" name="submit" value="edit" >
          </div>
        </form>
<?php } ?>
       </div>

     </div>
   </div>
