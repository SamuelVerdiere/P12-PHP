<!DOCTYPE html>
<html lang="en">
<head>
    <link rel ="stylesheet" type="text/css" href="design.css"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="shortcut icon" href="#"/>
    <title>AXG to Salesforce</title>
    </head>
    <body>
    <section class="top" id="toppage">
        <h1 class="pageTitle">AXG To Salesforce UI</h1>
        <div class="nickname" id='nick'>Welcome, Nickname@Salesforce.com</div>
        <form class='formcancel' id='formcancel' method="post" action="logout.php">
        <button class="logout" id='bloff' type='submit'>Log out</button>
        </form>
    </section>
    <?php 

    ?>

    <section class="tables" id="tables">

      <div class='divContact'>
        <div class='titre'>
        <h2 class="contactTitle" id="contactTitle">Contacts</h2>
        <button class="createContact" id='createCtc' type='submit'>Create Contact</button>
        <div class='containsInput' id='containsInput'>
        <input type="text" class="ContactName" id="ContactName" maxlength="30" placeholder='Contact Name' name='Contactname' required>
          <input type="text" class="ContactMail" id="ContactMaile" maxlength="30" placeholder='Contact Mail' name='ContactMail'>
          <input type="text" class="ContactPhone" id="ContactPhone" maxlength="30" placeholder='Contact Phone' name='ContactPhone'>
          <button class="createContacte" id='CCtc' type='submit'>Save Contact</button>
        </div>
        </div>
        <table class="contacts" id='contacto' border=1>
            <thead><tr><th>Edit</th><th>Name</th><th>Email</th><th>Phone</th></tr></thead>
            <tbody><tr><td><button class="EditButton" id="EditButton">Edit</button></td><td>Test Contact</td><td>Test Mail</td><td>555-2252</td></tr></tbody>
            <!--tbody id="insertContacts"></tbody-->
        </table>
      </div>

      <div class='divContract'>
        <div class='titre'>
        <h2 class="contractTitle" id="contractTitle">Contracts</h2>
        <button class="createContracte" id='createCtr' type='submit'>Create Contract</button>
        <div class='containsInputx' id='containsInputx'>
          <input type="text" class="ContractAccount" id="ContractAccount" maxlength="30" placeholder='Account Name' name='ContractAccount' required>
          <input type="text" class="StatusCtr" id="StatusCtr" maxlength="30" placeholder='Contract Status' name='StatusCtr'>
          <input type="text" class="StartDate" id="StartDate" maxlength="30" placeholder='Start Date' name='StartDate'>
          <input type="text" class="EndTerm" id="EndTerm" maxlength="30" placeholder='End Term' name='EndTerm'>
          <button class="createContracte" id='CCtr' type='submit'>Save Contact</button>
        </div>
        </div>
        <table class="contracts" id='contracta' border=1>
            <thead><tr><th>Account</th><th>Status</th><th>Start Date</th><th>Term (months)</th></tr></thead>
            <tbody><tr><td>Test Account</td><td>Test Draft</td><td>01/01/1970</td><td>12</td></tr></tbody>
            <!--tbody id="insertContracts"></tbody-->
        </table>

    </section>

<script>
const bobody = document.body;
const btnforContact = document.getElementById('createCtc');
const createCtr = document.getElementById('createContract');
const modaladd = document.getElementById('myModal');
const spanclose = document.getElementById('close');
const inputCtcName = document.getElementById('ContactName');
const inputCtcMail = document.getElementById('ContactMaile');
const inputCtcPhone = document.getElementById('ContactPhone');
const containsInput = document.getElementById('containsInput');
const btnforContract = document.getElementById('createCtr');
const saveContract = document.getElementById('CCtr');
const saveContact = document.getElementById('CCtc');
const editButton  = document.getElementById('EditButton');

containsInput.style.display = 'none';
containsInputx.style.display = 'none';

btnforContact.addEventListener('click', (e) => {
  containsInput.style.display = 'block';
  btnforContact.style.display = 'none';
})
btnforContract.addEventListener('click', (e) => {
  containsInputx.style.display = 'block';
  btnforContract.style.display = 'none';
})

saveContact.addEventListener('click', (e) => {
  containsInput.style.display = 'none';
  btnforContact.style.display = 'block';
  //php for inserting data in DB ?
  var contactValueName = document.querySelector('ContactName').value;
  var contactValueMail = document.querySelector('ContactMail').value;
  var contactValuePhone= document.querySelector('ContactPhone').value;
})

saveContract.addEventListener('click', (e) => {
  containsInputx.style.display = 'none';
  btnforContract.style.display = 'block';
  //php for inserting data in DB ? 
  var contractValueAccount   = document.querySelector('ContractAccount').value;
  var contractValueStatus    = document.querySelector('StatusCtr').value;
  var contractValueStartDate = document.querySelector('StartDate').value;
  var contractValueEndDate   = document.querySelector('EndTerm').value;
})

$(".EditButton").click(function() {
  var row = $(this).closest("tr");
  
  $(this).addClass('selected').siblings().removeClass('selected');    
  var value=$(this).closest('td').html();
  value.contentEditable = true;
})

</script>

</body>
</html>