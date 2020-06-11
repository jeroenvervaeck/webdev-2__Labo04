
<html>
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <link rel="icon" href="../../assets/img/icons/foundation-favicon.ico" type="image/x-icon">
      <meta name="viewport" content="width=device-width">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/foundation-emails/2.2.1/foundation-emails.min.css" rel="stylesheet">
    <title>Contact chateau - {{ $subject }}</title>
    </head>
      <body>
  <style type="text/css">
  .header {
    background: #BCD979;
    width: 100%;
  }
  .header .columns {
    padding-bottom: 0;
  }
  .header .wrapper-inner {
    padding: 20px; /*controls the height of the header*/
  }
  .header .container {
    background: #BCD979;
  }
  .wrapper.secondary {
    background: #f3f3f3;
  }
  #title {
      text-align: center;
      margin-bottom: 10px;
      color: #BCD979;
      font-size: 30px;
      text-transform: uppercase;
  }
  .detail {
      color: gray;
  }
  #content {
      font-size: 20px;
  }
  #link {
    color: gray;
    padding: 20px;
  }
  </style>

  <table align="center" bgcolor="#8A8A8A" class="wrapper header float-center">
    <tr>
      <td class="wrapper-inner">
        <table align="center" class="container">
          <tbody>
            <tr>
              <td>
                <table class="row collapse">
                  <tbody>
                    <tr>
                      <th class="small-6 large-6 columns first" valign="middle">
                        <table>
                          <tr>
                            <th><img width="200px" height="200px" src="https://content-cdn.tipsenweetjes.nl/wp-content/uploads/2019/07/16085450/Chateau-Meiland-laatste-aflevering.jpg"></th>
                          </tr>
                        </table>
                      </th>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>
          </tbody>
        </table>
      </td>
    </tr>
  </table>
  <table align="center" class="container float-center">
    <tbody>
      <tr>
        <td>
          <table class="spacer">
            <tbody>
              <tr>
                <td height="16px" style="font-size:16px;line-height:16px;">&#xA0;</td>
              </tr>
            </tbody>
          </table>
          <table class="row">
            <tbody>
              <tr>
                <th class="small-12 large-12 columns first last">
                  <table id="wrapper_body">
                    <tr>
                      <th>
                        <h1 id="title">hallo, {{ $name }}</h1>
                        <p class="detail">Je verzond een email vanuit de website</p>
                        <p id="content">{{ $content }}</p>
                      </th>
                      <th class="expander"></th>
                    </tr>
                  </table>
                </th>
              </tr>
            </tbody>
          </table>
          <table align="center" class="wrapper secondary">
            <tr>
              <td class="wrapper-inner">
                <table class="spacer">
                  <tbody>
                    <tr>
                      <p id="link"><a href="http://127.0.0.1:8000">Klik hier om terug te gaan naar onze website</a></p>
                    </tr>
                  </tbody>
                </table>
                <table class="row">
                  <tbody>
                    <tr>
                      <th class="small-12 large-6 columns first">

                            </th>
                          </tr>
                        </table>
                      </th>
                      <th class="small-12 large-6 columns last">
                        <table>

                        </table>
                      </th>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </tbody>
  </table>

      <!-- prevent Gmail on iOS font size manipulation -->
      <div style="display:none; white-space:nowrap; font:15px courier; line-height:0;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </div>
    </body>
  </html>
