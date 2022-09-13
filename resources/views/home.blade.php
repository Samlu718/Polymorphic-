<!DOCTYPE html>
<html>

<head>
    <title>呂冠賢的網頁</title>
    <link rel="stylesheet" href="home.css">
</head>

<body>
    <h1>呂冠賢的網頁</h1>
    <form action="https://www.google.com/search">
        <center>
            <p>
                <label for="search">Google搜尋</label>
                <input type="text" name="q" id="search">
                <input type="submit" value="確認">
            </p>
        </center>
    </form>
    <hr>
    <div>
        <p>
            CSS ID Select
        </p>
        <ol>
            <li id="nice">寫功課</li>
            <li>吃午餐</li>
            <li>洗衣服</li>
        </ol>
        <table>
            <thead>
                <tr>
                    <th colspan="2">The table header</th>
                    <th colspan="2">colspan 2</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>The table body</td>
                    <td>with two columns</td>
                    <td>123</td>
                    <td>456</td>
                </tr>
                <tr>
                    <td><sup>1</sup>/<sub>2</sub></td>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                </tr>
            </tbody>
        </table>
    </div>
    <hr>
    <div>
        <h2>Race Registration!</h2>
        <form action="">
            <p>
                <label for="firstname">Firstname</label>
                <input type="text" name="firstname" id="firstname" placeholder="Firstname" required>
            </p>
            <p>
                <label for="lastname">Lastname</label>
                <input type="text" name="lastname" id="lastname" placeholder="Lastname" required>
            </p>
            <fieldset id="select">
                <legend>Select:</legend>
                <p>
                    <input type="radio" id="fun" name="Race" value="fun" checked>
                    <label for="fun">Fun Run 5K</label>
                </p>
                <p>
                    <input type="radio" id="half" name="Race" value="half">
                    <label for="half">Half Marathon</label>
                </p>
                <p>
                    <input type="radio" id="full" name="Race" value="full">
                    <label for="full">Full Marathon</label>
                </p>
            </fieldset>
            <p>
                <label for="email">Email</label>
                <input type="email" required>
                <label for="password">Password</label>
                <input type="password" minlength="8" maxlength="12" required>
            </p>
            <p>
                <label for="age">Select Age Group</label>
                <select name="age" id="age">
                    <option value="a">under 18</option>
                    <option value="b">18-30</option>
                    <option value="c">30-50</option>
                    <option value="d">50+</option>
                </select>
            </p>
            <button>Register!</button>
        </form>
    </div>
    <hr>
    <div>
        <p>
            <a href="https://zh.m.wikipedia.org/zh-hant/%E8%82%A1%E7%A5%A8" class="red">股票</a>（英語：stock）或是<a
                href="https://zh.m.wikipedia.org/zh-hant/%E8%82%A1%E4%BB%BD%E6%9C%89%E9%99%90%E5%85%AC%E5%8F%B8"
                class="red">資本存貨</a>（英語：capital stock）是一種有價證券，
            <a href="https://zh.m.wikipedia.org/zh-hant/%E8%82%A1%E4%BB%BD%E6%9C%89%E9%99%90%E5%85%AC%E5%8F%B8"
                class="red">股份有限公司</a>將其所有權藉由這種有價證券進行分配<sup>[1]</sup>。因為股份有限公司需要籌措長期資金，因此將股票發給投資者作為公司資本的部分所有權憑證，成為股東以此獲得股利（股票股利）或/且股息（現金股利），並分享公司成長或交易市場波動帶來的利潤；但也要共同承擔公司運作錯誤所帶來的風險
        </p>
    </div>
    <hr>
    <div>
        <p>世界第一張股票是在十七世紀的時候，由荷蘭東印度公司所發行的[2]。公元1606年，專事荷蘭與亞洲貿易的「東印度公司」，以阿姆斯特丹為中心，發行650萬荷蘭盾股票，已具備現代股份公司的主要特徵，其運作方式對後世產生重大深遠影響。
            當時該公司經營航海事業。它在每次出海前向人集資，航程完成後即將各人的出資以及該航次的利潤交還給出資者。1613年起該公司改為四航次，才派一次利潤。這就是「股東」和「配息」的前身。
        </p>
    </div>
    <hr>
    <div>
        <p>紅籌股：此概念誕生於20世紀90年代初期的香港股票市場。香港投資者和國際投資者把在中華人民共和國境外註冊，在香港上市的股票稱為紅籌股。早期的紅籌股，主要是一些中資公司收購香港中小型上市公司後改造而形成的，如「中信泰富」等。之後出現了內地一些省市將其在香港的窗口公司改組並在香港上市後形成的，如「上海實業」、「北京控股」等。紅籌股已經成為除B股及H股外，內地企業進入國際資本市場籌資的一條重要渠道。對於紅籌股的定義目前主要有兩種：
            按照業務區域來區分：</p>
        <p>如果某個上市公司的主要業務在中國大陸，其盈利中的大部分也來自該業務，那麼這家在中國境外註冊，在香港上市的股票就是紅籌股。國際信息公司彭博資訊所編的紅籌股指數就是按照這一標準來遴選的。
            按照權益多寡來區分：如果一家上市公司股東權益的大部分直接來自中國大陸，或具有中國大陸背景，也就是為中資所控股，那麼這家在中國境外註冊，香港上市的股票就屬於紅籌股。1997年4月，恒生指數服務公司編制的恒生紅籌股指數就是按照這一標準來劃定的。
        </p>
    </div>
    <hr>
    <div>
        <p>
            基於「同股同權」的公平原則，香港自1987年起禁止上市公司發行B股。已發行B股的公司則可以繼續營運。現時，太古股份有限公司是香港唯一的AB股。兩者投票權相等，但B股的面值及所佔權益只是A股的五分一。

            香港主要股票交易服務包括非即日股票交易﹑即日股票交易﹑月供股票服務﹑申購新股服務等等。
        </p>
    </div>
    <hr>
</body>

</html>