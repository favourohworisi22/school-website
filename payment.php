<?php include __DIR__ . "/includes/header.php"; ?>
<?php include __DIR__ . "/config/config.php"; ?>

<style>
  .btn-pay {
    background: linear-gradient(45deg, #ff4da6, #4da6ff);
    border: none;
    color: #fff;
  }
  .btn-pay:hover {
    opacity: 0.9;
  }
</style>

<section class="container my-5">
  <h2 class="mb-4 text-center">Pay School Fees</h2>

  <form id="paymentForm">
    <label>Student's Name</label>
    <input class="form-control mb-3" type="text" id="studentName" required>

    <label>Email</label>
    <input class="form-control mb-3" type="email" id="email" required>

    <label>Class</label>
    <select class="form-control mb-3" id="classSelect" required>
      <option value="">Select Class</option>
      <option value="Nursery">Nursery</option>
      <option value="Primary">Primary</option>
      <option value="Secondary">Secondary</option>
    </select>

    <label>Amount (₦)</label>
    <input class="form-control mb-3" type="number" id="amount" readonly>

    <button type="button" onclick="payWithPaystack()" class="btn btn-pay w-100">
      Pay Now
    </button>
  </form>
</section>

<script src="https://js.paystack.co/v1/inline.js"></script>

<script>
const fees = {
  Nursery: 50000,
  Primary: 80000,
  Secondary: 120000
};

document.getElementById("classSelect").addEventListener("change", function () {
  document.getElementById("amount").value = fees[this.value] || "";
});

function payWithPaystack() {
  let email = emailInput = document.getElementById("email").value;
  let amount = document.getElementById("amount").value;
  let studentName = document.getElementById("studentName").value;
  let studentClass = document.getElementById("classSelect").value;

  if (!email || !amount || !studentName || !studentClass) {
    alert("Fill all fields");
    return;
  }

  let handler = PaystackPop.setup({
    key: "<?php echo PAYSTACK_PUBLIC; ?>",
    email: email,
    amount: amount * 100,
    currency: "NGN",
    metadata: {
      custom_fields: [
        { display_name: "Student Name", value: studentName },
        { display_name: "Class", value: studentClass }
      ]
    },
    callback: function (response) {
      window.location.href =
        "paystack-verify.php?reference=" + response.reference;
    },
    onClose: function () {
      alert("Payment cancelled");
    }
  });

  handler.openIframe();
}
</script>

<?php include __DIR__ . "/includes/footer.php"; ?>

