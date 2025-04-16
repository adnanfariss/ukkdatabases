<!DOCTYPE html>
<html>
<head>
    <title>Create Payment</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Create Payment</h1>
        <form action="{{ route('payments.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="order_id">Order</label>
                <select class="form-control" id="order_id" name="order_id" required>
                    @foreach ($orders as $order)
                    <option value="{{ $order->id }}">{{ $order->id }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="payment_method">Payment Method</label>
                <select class="form-control" id="payment_method" name="payment_method" required>
                    <option value="credit_card">Credit Card</option>
                    <option value="paypal">PayPal</option>
                    <option value="bank_transfer">Bank Transfer</option>
                </select>
            </div>
            <div class="form-group">
                <label for="transaction_id">Transaction ID</label>
                <input type="text" class="form-control" id="transaction_id" name="transaction_id">
            </div>
            <div class="form-group">
                <label for="amount">Amount</label>
                <input type="number" step="0.01" class="form-control" id="amount" name="amount" required>
            </div>
            <div class="form-group">
                <label for="payment_status">Payment Status</label>
                <select class="form-control" id="payment_status" name="payment_status" required>
                    <option value="paid">Paid</option>
                    <option value="pending">Pending</option>
                    <option value="failed">Failed</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Create Payment</button>
        </form>
    </div>
</body>
</html>