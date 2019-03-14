<!DOCTYPE html>
<main lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Welcome to Tradesman</title>
        <link> rel = "stylesheet" href= "style.css">
        <link rel="stylesheet" href="unsemantic-grid-responsive-tablet.css">
</main>
</head>
<body>
<main class="grid-container">
    <section class="grid-50">
        <div id="TradeProfile">
            <form method="post" action="server/tradlogin.php">
                <h1>Profile of Tradesman</h1>
                <h2>You can view my Profile</h2>
                <div class="input">
                    <label>Username</label>
                    <input type="text" name="uname_tr" placeholder="username">
                </div>
                <br>
                <div class="input">
                    <label>Email</label>
                    <input type="email" name="email_tr" placeholder="email">
                </div>
                <br>
                <div class="input">
                    <label>Address</label>
                    <input type="text" name="add1_tr" placeholder=""><br>
                    <input type="text" name="add2_tr" placeholder=""><br>
                    <input type="text" name="city_tr" placeholder=""><br><br>
                    <label>Post Code</label>
                    <input type="text" name="postcode_tr" placeholder="postcode">
                </div>
                <br>
                <div class="input" id="profSelect">
                    <div class="input">
                        <label>Profession</label>
                        <select multiple name="profession" id="prof">
                            <option value="Builder" selected>Builder</option>
                            <option value="Plumber" >Plumber</option>
                            <option value="Electrician">Electrician</option>
                            <option value="Stone Mason">Stone Mason</option>
                            <option value="Welder">Welder</option>
                            <option value="Carpenter">Carpenter</option>
                            <option value="Painter/Decorator">Painter/Decorator</option>
                            <option value="Handyman">Handyman</option>
                        </select>
                        <p>Press ctrl to select  multiple</p>
                    </div>
                </div>
                <br>
                <div class="input">
                    <label>About You</label>
                    <textarea name="About You" id="aboutYou">
                    Please enter a brief description of yourself and the work you do.
                </textarea>
                </div>
                <br>
                <div class="input">
                    <label>Qualifications</label>
                    <textarea name="qua" id="qualification">
                    Please list any qualifications you have here
                </textarea>
                </div>
            </form>
        </div>
    </section>
</main>
</body>
</div>


