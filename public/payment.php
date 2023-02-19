<?php
// Lines 0 - 51 written by William Hilton
// The payment file facilitates the transaction for extending the lifetime of a current listing.

session_start();
?>


<?php include("includes/config.php");?>
<?php include("includes/header.php"); ?>
<?php include("includes/nav.php"); ?>

<div class="mainContent">
  <script src="https://www.paypal.com/sdk/js?client-id=AQRKg5CtQv60NC_ojGOxhJSWML_LLU2uSiH_v_6y7JafQNyHIS33kS9gDTc7EEzk7DztulwWWGDQ28uc&currency=USD"></script>
  
  <div class="align-items-center justify-content-center">
      <h1>Prioritize Your Advertisement</h1>
      <p>Pay a one-time fee of $10 USD and the lifetime of your post will be extended by 48 hours.</p>
      <div id="paypal-button-container" defer></div>
  </div>

  <script>
    paypal.Buttons({
    // Sets up the transaction when a payment button is clicked
    createOrder: (data, actions) => {
      return actions.order.create({
      purchase_units: [{
          amount: {
          value: '10.00' // Can also reference a variable or function
          }
      }]
      });
    },
    // Finalize the transaction after payer approval
    onApprove: (data, actions) => {
      return actions.order.capture().then(function(orderData) {
      // Successful capture! For dev/demo purposes:
      console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
      const transaction = orderData.purchase_units[0].payments.captures[0];
      alert(`Transaction ${transaction.status}: ${transaction.id}\n\nSee console for all available details`);
      // When ready to go live, remove the alert and show a success message within this page. For example:
      // const element = document.getElementById('paypal-button-container');
      // element.innerHTML = '<h3>Thank you for your payment!</h3>';
      // Or go to another URL:  actions.redirect('thank_you.html');
      });
    }
    }).render('#paypal-button-container');
  </script>
</div>

<?php include("includes/footer.php"); ?>