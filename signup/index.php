<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php include_once "../header.php";?>
    <div class="isolated center-small">
        <form autocomplete="off" method="post" action="signup.inc.php">
            <div class="large">Sign Up</div>
            <div class="border drop-shadow stage1">
                <input class="medium" type="text" name="username" placeholder="Username">
                <input class="medium" id="password" type="password" name="password" placeholder="Password">
                <input class="medium" id="passwordrepeat" type="password" name="passwordrepeat" placeholder="Repeat Password">
                <div class="center-container">
                    <button type="button" class="filled" onclick="tostage2()">Next</button>
                </div>
            </div>
            <div class="border drop-shadow stage2">
                <div class="large">Choose your languages</div>
                <div class="medium">You're almost there. Now, just choose the languages you know/want to know more about.</div>
                <div class="languages">
                    <label for="python" class="toggle unfilled">Python</label>
                    <input type="checkbox" name="python" id="python">
                    <label for="c" class="toggle unfilled">C</label>
                    <input type="checkbox" name="c" id="c">
                    <label for="java" class="toggle unfilled">Java</label>
                    <input type="checkbox" name="java" id="java">
                    <label for="c++" class="toggle unfilled">C++</label>
                    <input type="checkbox" name="c++" id="c++">
                    <label for="c#" class="toggle unfilled">C#</label>
                    <input type="checkbox" name="c#" id="c#">
                    <label for="visual-basic" class="toggle unfilled">Visual Basic</label>
                    <input type="checkbox" name="visual-basic" id="visual-basic">
                    <label for="javascript" class="toggle unfilled">HTML</label>
                    <input type="checkbox" name="html" id="html">
                    <label for="javascript" class="toggle unfilled">CSS</label>
                    <input type="checkbox" name="css" id="css">
                    <label for="javascript" class="toggle unfilled">JavaScript</label>
                    <input type="checkbox" name="javascript" id="javascript">
                    <label for="sql" class="toggle unfilled">SQL</label>
                    <input type="checkbox" name="sql" id="sql">
                    <label for="php" class="toggle unfilled">PHP</label>
                    <input type="checkbox" name="php" id="php">
                    <label for="assembly" class="toggle unfilled">Assembly</label>
                    <input type="checkbox" name="assembly" id="assembly">
                    <label for="go" class="toggle unfilled">Go</label>
                    <input type="checkbox" name="go" id="go">
                    <label for="matlab" class="toggle unfilled">Matlab</label>
                    <input type="checkbox" name="matlab" id="matlab">
                    <label for="r" class="toggle unfilled">R</label>
                    <input type="checkbox" name="r" id="r">
                    <label for="groovy" class="toggle unfilled">Groovy</label>
                    <input type="checkbox" name="groovy" id="groovy">
                    <label for="ruby" class="toggle unfilled">Ruby</label>
                    <input type="checkbox" name="ruby" id="ruby">
                    <label for="swift" class="toggle unfilled">Swift</label>
                    <input type="checkbox" name="swift" id="swift">
                    <label for="fortran" class="toggle unfilled">Fortran</label>
                    <input type="checkbox" name="fortran" id="fortran">
                    <label for="perl" class="toggle unfilled">Perl</label>
                    <input type="checkbox" name="perl" id="perl">
                    <label for="delphi" class="toggle unfilled">Delphi</label>
                    <input type="checkbox" name="delphi" id="delphi">
                    <label for="sas" class="toggle unfilled">SAS</label>
                    <input type="checkbox" name="sas" id="sas">
                    <label for="cobol" class="toggle unfilled">COBOL</label>
                    <input type="checkbox" name="cobol" id="cobol">
                    <label for="scratch" class="toggle unfilled">Scratch</label>
                    <input type="checkbox" name="scratch" id="scratch">
                    <label for="prolog" class="toggle unfilled">Prolog</label>
                    <input type="checkbox" name="prolog" id="prolog">
                    <label for="rust" class="toggle unfilled">Rust</label>
                    <input type="checkbox" name="rust" id="rust">
                    <label for="julia" class="toggle unfilled">Julia</label>
                    <input type="checkbox" name="julia" id="julia">
                    <label for="objective-c" class="toggle unfilled">Objective-C</label>
                    <input type="checkbox" name="objective-c" id="objective-c">
                    <label for="scala" class="toggle unfilled">Scala</label>
                    <input type="checkbox" name="scala" id="scala">
                    <label for="ada" class="toggle unfilled">Ada</label>
                    <input type="checkbox" name="ada" id="ada">
                    <label for="lua" class="toggle unfilled">Lua</label>
                    <input type="checkbox" name="lua" id="lua">
                    <label for="clojure" class="toggle unfilled">Clojure</label>
                    <input type="checkbox" name="clojure" id="clojure">
                    <label for="abap" class="toggle unfilled">ABAP</label>
                    <input type="checkbox" name="abap" id="abap">
                    <label for="haskell" class="toggle unfilled">Haskell</label>
                    <input type="checkbox" name="haskell" id="haskell">
                    <label for="vbscript" class="toggle unfilled">VBScript</label>
                    <input type="checkbox" name="vbscript" id="vbscript">
                    <label for="vhdl" class="toggle unfilled">VHDL</label>
                    <input type="checkbox" name="vhdl" id="vhdl">
                    <label for="kotlin" class="toggle unfilled">Kotlin</label>
                    <input type="checkbox" name="kotlin" id="kotlin">
                    <label for="lisp" class="toggle unfilled">Lisp</label>
                    <input type="checkbox" name="lisp" id="lisp">
                    <label for="dart" class="toggle unfilled">Dart</label>
                    <input type="checkbox" name="dart" id="dart">
                    <label for="logo" class="toggle unfilled">Logo</label>
                    <input type="checkbox" name="logo" id="logo">
                    <label for="powershell" class="toggle unfilled">Powershell</label>
                    <input type="checkbox" name="powershell" id="powershell">
                    <label for="apex" class="toggle unfilled">Apex</label>
                    <input type="checkbox" name="apex" id="apex">
                    <label for="d" class="toggle unfilled">D</label>
                    <input type="checkbox" name="d" id="d">
                    <label for="typescript" class="toggle unfilled">TypeScript</label>
                    <input type="checkbox" name="typescript" id="typescript">
                    <label for="scheme" class="toggle unfilled">Scheme</label>
                    <input type="checkbox" name="scheme" id="scheme">
                    <label for="elixir" class="toggle unfilled">Elixir</label>
                    <input type="checkbox" name="elixir" id="elixir">
                </div>
                <div class="center-container">
                    <button class="filled" type="submit" name="submit">Sign Up</button>
                </div>
            </div>
        </form>
    </div>
    <script src="../index.js"></script>
</body>
</html>