@extends('layoutrang')
@section('content')

<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.checkout-form-container {
    width: 100%;
    max-width: 600px;
    margin: 50px auto;
    padding: 20px;
    background-color: white;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
}

h2 {
    text-align: center;
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 15px;
}

.form-group label {
    display: block;
    margin-bottom: 5px;
}

.form-group input[type="text"],
.form-group input[type="email"],
.form-group input[type="tel"],
.form-group input[type="radio"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 5px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.form-group input[type="radio"] {
    width: auto;
    margin-right: 5px;
}

button[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

button[type="submit"]:hover {
    background-color: #0056b3;
}

</style>

<div class="checkout-form-container">
    <h2>Checkout Form</h2>
    <form id="checkout-form">
        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="payment-method">Phương thức thanh toán:</label>
            <div>
                <input type="radio" id="cash" name="payment-method" value="cash" required>
                <label for="cash">Tiền mặt</label>
            </div>
            <div>
                <input type="radio" id="credit-card" name="payment-method" value="credit-card">
                <label for="credit-card">Thẻ tín dụng</label>
            </div>
        </div>
        <div id="credit-card-details" class="form-group" style="display: none;">
            <label for="card-number">Tên ngân hàng:</label>
            <input type="text" id="card-number" value="Vietcombank" name="card-number">
            <label for="expiry-date">Số thẻ:</label>
            <input type="text" id="expiry-date" name="expiry-date" value="1030052344 chuyển tiền vào tài khoản này nếu chọn phương thức này">
            <label for="cvv">Nội dung:</label>
            <input type="text" id="cvv" name="cvv">
        </div>
        <button type="submit" style="background-color: #FEA116">Submit</button>
    </form>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
    const creditCardDetails = document.getElementById('credit-card-details');
    const paymentMethodInputs = document.querySelectorAll('input[name="payment-method"]');

    paymentMethodInputs.forEach(input => {
        input.addEventListener('change', function() {
            if (this.value === 'credit-card') {
                creditCardDetails.style.display = 'block';
            } else {
                creditCardDetails.style.display = 'none';
            }
        });
    });
});

</script>

@endsection