<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quản lý sản phẩm</title>
</head>
<style>
    table {
        width: 100%;
        border: 1px solid black;
    }
</style>

<body>
<!--tạo form nhập thông tin, thêm, sửa, xóa sản phẩm-->
<form action="them-san-pham.php" method="get">
    <fieldset>
        <legend>Thêm sản phẩm
        </legend>
        <label for="ds">ID</label>
        <input type="number" name="danhsach" id="ds">
        <label for="productName">tên sản phẩm</label>
        <input type="text" name="tensanpham" id="productName">
        <label for="Category">Danh mục sản phẩm</label>
        <input type="text" name="danhmuc" id="Category">
        <label for="amount">Số lượng</label>
        <input type="number" name="soluong" id="amount">
        <label for="price"> Giá sản phẩm </label>
        <input type="number" name="giasanpham" id="price">
        <label for="Description"> Mô tả sản phẩm </label>
        <input type="text" name="motasanpham" id="Description">
        <label for="createdDate"> Ngày tạo sản phẩm</label>
        <input type="date" name="ngaythemsanpham" id="createdDate">
        <label for="imgproduct">ảnh sản phẩm</label>
        <input type="text" name="anhmotasanpham" id="imgproduct">
        <input type="submit" value="Thêm">
        <input type="submit" value="Sửa" id="edit">
        <input type="submit" value="Xóa">
    </fieldset>
<!--bảng thông tin sản phẩm -->
    <h3> sản phẩm </h3>
    <table>
        <tr>
            <td>ID</td>
            <td>Tên sản phẩm</td>
            <td>Danh mục sản phẩm</td>
            <td>Số lượng</td>
            <td>Giá sản phẩm</td>
            <td>Mô tả sản phẩm</td>
            <td>Ngày tạo sản phẩm</td>
            <td>ảnh sản phẩm</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
</form>
</body>
</html>


<?php
?>




