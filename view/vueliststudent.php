<?php $this->titre = "les etudiants" ?>

<div class="container" >
  <table class="table" style="background-color: gray;">
  <thead class="thead-dark">
      <tr>
        <th scope="col">Name</th>
        <th scope="col">lastname</th>
        <th scope="col">age</th>
        <th scope="col">cne</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
      </tr>
  </thead>
  <tbody >
    <?php foreach ($liststudent as $student) {?>
    <tr>
      <td> <?php echo $student->getName(); ?> </td>
      <td> <?php echo $student->getlastname(); ?> </td>
      <td> <?php echo $student->getage(); ?>  </td>
      <td> <?php echo $student->getcne(); ?>  </td>
      <td><a href="index.php?action=<?php echo "modifierstudent"?>&id=<?php echo $student->getId(); ?>"><button type = "submit" class = "btn btn-info" >Edit</button></a></td>
      <td><a href="index.php?action=<?php echo "suppression"?>&id=<?php echo $student->getId(); ?>"><button type = "submit" class = "btn btn-danger">Delete</button></a></td>
    </tr>
    <?php } ?>
  </tbody>
  </table>
  <div class="text-center">
    <a @onclick="" href="index.php?action=<?php echo "addstudent"?>"><button type = "submit" class = "btn btn-dark">create new student </button></a></td>

  </div>
</div>
