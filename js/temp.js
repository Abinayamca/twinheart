/*let currentStep = 0;

function showStep(step) {
  document.querySelectorAll(".step-content").forEach((el, i) =>
    el.classList.toggle("active", i === step)
  );
  document.querySelectorAll(".step").forEach((el, i) =>
    el.classList.toggle("active", i <= step)
  );
}

function nextStep() {
  if (currentStep < 3) {
    currentStep++;
    showStep(currentStep);
  }
}

function prevStep() {
  if (currentStep > 0) {
    currentStep--;
    showStep(currentStep);
  }
}

function setPackage() {
  const pkg = document.getElementById("packageSelect").value;
  document.getElementById("selectedPackage").value = pkg;
  currentStep = 0;
  showStep(currentStep);
}*/



let currentStep = 0;

function showStep(step) {
  const contents = document.querySelectorAll(".step-content");
  const steps = document.querySelectorAll(".step");

  contents.forEach((el, i) =>
    el.classList.toggle("active", i === step)
  );

  steps.forEach((el, i) =>
    el.classList.toggle("active", i <= step)
  );

  // BUTTON LOGIC
  if (step === contents.length - 1) {
    document.getElementById("continueBtn").classList.add("d-none");
    document.getElementById("submitBtn").classList.remove("d-none");
  } else {
    document.getElementById("continueBtn").classList.remove("d-none");
    document.getElementById("submitBtn").classList.add("d-none");
  }
}

function nextStep() {
  if (currentStep < 3) {
    currentStep++;
    showStep(currentStep);
  }
}

function prevStep() {
  if (currentStep > 0) {
    currentStep--;
    showStep(currentStep);
  }
}

function setPackage() {
  const pkg = document.getElementById("packageSelect").value;
  document.getElementById("selectedPackage").value = pkg;
  currentStep = 0;
  showStep(currentStep);
}

function submitForm() {
  alert("Form submitted successfully 🎉");
  // here you can add API / WhatsApp / DB logic
}