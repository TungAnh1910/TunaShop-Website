<?php
//load file layout vao day
$this->fileLayout = "Layout.php";
?>

<div style="margin-bottom:5px;">
    <a href="index.php?controller=analyst&action=analyst" class="btn btn-primary">Danh sách các sản phẩm đã bán</a>
</div>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Doanh thu bán hàng</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    <h1>Doanh số bán hàng</h1>

    <div style="width: 1000px; height: 900px;">
        <h2>Doanh thu bán hàng theo ngày</h2>
        <canvas id="daily-sales-chart"></canvas>
    </div>

    <div style="width: 1000px; height: 900px;">
        <h2>Doanh thu bán hàng theo tháng</h2>
        <canvas id="monthly-sales-chart"></canvas>
    </div>

    <script type="text/javascript">
        // Lấy dữ liệu thống kê doanh số bán hàng từ controller và chuyển đổi sang định dạng phù hợp
        var sales = <?= json_encode($salesData); ?>;

        var dailySalesData = {
            labels: Object.keys(sales.daily_sales),
            datasets: [{
                label: 'Doanh thu bán hàng theo ngày',
                data: Object.values(sales.daily_sales),
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1
            }]
        };
        var dailySalesConfig = {
            type: 'bar',
            data: dailySalesData,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        };
        var dailySalesChart = new Chart(
            document.getElementById('daily-sales-chart'),
            dailySalesConfig
        );

        var monthlySalesData = {
            labels: Object.keys(sales.monthly_sales),
            datasets: [{
                label: 'Doanh thu bán hàng theo tháng',
                data: Object.values(sales.monthly_sales),
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        };
        var monthlySalesConfig = {
            type: 'bar',
            data: monthlySalesData,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        };
        var monthlySalesChart = new Chart(
            document.getElementById('monthly-sales-chart'),
            monthlySalesConfig
        );
    </script>
</body>

</html>