<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ThesisMasterGate Registration Form</title>
<style>
  body { font-family: Arial, sans-serif; }
  .form-container { width: 300px; margin: auto; }
  .form-group { margin-bottom: 15px; }
  label { display: block; margin-bottom: 5px; }
  input, select { width: 100%; padding: 10px; margin-bottom: 10px; }
  .mandatory { color: red; }
  .button-group { text-align: right; }
  button { padding: 10px 20px; }
</style>
</head>
<body>
    
<div class="form-container">
  <h1>ThesisMasterGate</h1>
  <h2>New Registration</h2>
  <form>
    <!-- Platinum Information Section -->
    <div class="form-group">
      <label>Type of Registration <span class="mandatory">*</span></label>
      <select required>
        <option value="premier" selected>Premier</option>
        <!-- Add other options here -->
      </select>
    </div>
    <!-- Add other form fields here -->
    <!-- Communication Information Section -->
    <div class="form-group">
      <label>Address <span class="mandatory">*</span></label>
      <input type="text" required>
    </div>
    <!-- Add other form fields here -->
    <div class="button-group">
      <button type="button">Back</button>
      <button type="submit">Next</button>
    </div>
  </form>
</div>
</body>
</html>
