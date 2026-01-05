const classFees = {
  Nursery: 150000,
  Primary: 250000,
  Secondary: 400000
};

function updateFee() {
  const cls = document.getElementById("class").value;
  document.getElementById("fee").value = classFees[cls] || "";
}
