<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mua hoa</title>
  <style>
    table {
      border: 1px solid black;
      border-collapse: collapse;
      height: 200px;
      width: 500px;
    }

    th {
      background-color: orange;
      height: 30px;
      width: 40px;
      color: red;
      font-size: 20px;
      font-style: italic;
    }

    tr,
    td {
      background-color: pink;
      color: red;
    }

    textarea {
      background-color: white;
    }
  </style>
</head>

<body>
  <form>
    <table align="center">
      <th colspan="2">Mua hoa</th>
      <tr>
        <td>Loại hoa bạn chọn:</td>
        <td>
          <input style="height: 20px; width: 200px;" type="text" id="hoaInput">
          <input type="button" value="Thêm vào giỏ hoa" onclick="themVaoGioHoa()">
        </td>
      </tr>
      <tr>
        <td colspan="2" align="left">
          Giỏ hoa bạn có:
        </td>
      </tr>
      <tr>
        <td colspan="2" align="center">
          <textarea style="width: 450px; word-wrap: break-word; max-width:450px;height:auto" id="result" type="text" readonly></textarea>
        </td>
      </tr>
    </table>
  </form>

  <script>
    var gioHoa = [];

    function themVaoGioHoa() {
      var hoaInput = document.getElementById("hoaInput");
      var resultInput = document.getElementById("result");

      var loaiHoa = hoaInput.value;

      if (gioHoa.includes(loaiHoa)) {
        alert(loaiHoa + " đã tồn tại");
      } else {
        gioHoa.push(loaiHoa);
        resultInput.value = gioHoa.join(" -- ");
        hoaInput.value = "";
      }
    }
  </script>
</body>

</html>