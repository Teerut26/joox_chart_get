<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>

        </title>
        <?php include('css.php'); ?>
    </head>
    <body>
    <div class="card">
    <div class="card-body">
    <h4><svg class="bi bi-link-45deg" width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M4.715 6.542L3.343 7.914a3 3 0 104.243 4.243l1.828-1.829A3 3 0 008.586 5.5L8 6.086a1.001 1.001 0 00-.154.199 2 2 0 01.861 3.337L6.88 11.45a2 2 0 11-2.83-2.83l.793-.792a4.018 4.018 0 01-.128-1.287z"/>
  <path d="M5.712 6.96l.167-.167a1.99 1.99 0 01.896-.518 1.99 1.99 0 01.518-.896l.167-.167A3.004 3.004 0 006 5.499c-.22.46-.316.963-.288 1.46z"/>
  <path d="M6.586 4.672A3 3 0 007.414 9.5l.775-.776a2 2 0 01-.896-3.346L9.12 3.55a2 2 0 012.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 00-4.243-4.243L6.586 4.672z"/>
  <path d="M10 9.5a2.99 2.99 0 00.288-1.46l-.167.167a1.99 1.99 0 01-.896.518 1.99 1.99 0 01-.518.896l-.167.167A3.004 3.004 0 0010 9.501z"/>
</svg> JOOX_GET_CHART</h4>
      <br>
      <form method="get" action="joox_get_chart.php">
      <select id="cars" name="url" class="form-control">
            <option value="https://www.joox.com/th/chart/42">THAILAND TOP 100</option>
            <option value="https://www.joox.com/th/chart/44">TOP 50 INTERNATIONAL</option>
            <option value="https://www.joox.com/th/chart/73">TOP KARAOKE HITS</option>
            <option value="https://www.joox.com/th/chart/45">TOP 50 INDIE</option>
            <option value="https://www.joox.com/th/chart/46">TOP 100 เพลงลูกทุ่ง</option>
            <option value="https://www.joox.com/th/chart/47">TOP 50 K-POP</option>
            <option value="https://www.joox.com/th/chart/48">TOP 50 ASIAN</option>
            <option value="https://www.joox.com/th/chart/57">THTOP100 2019</option>
            <option value="https://www.joox.com/th/chart/58">ALL TIME HITS CHART</option>
            <option value="https://www.joox.com/th/chart/112">TOP 50 PODCAST</option>
        </select>
          
          <br>
          <input name="Submit" type="submit" value="OK" class="btn btn-primary">
          
      </form>
    </div>
    </div>
    </body>
    <?php include('js.php'); ?>
</html>
