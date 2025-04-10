<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link rel="stylesheet" href="styles.css">
</head>
<?php
require_once __DIR__ . "/../includes/header.php";
?>
<body>
    
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
    <main>
        <h2>Home Page</h2>
        <p>This is the home page of my website.</p>
        <p>Nothing is here yet.</p>
        <p>Feel free to explore, but you won't get far!</p>
        <?php
            $fname = $_POST['fname'] ?? '';
            $checked = isset($_POST['checkbox1']);
            $radio=$_POST['radio_cluster'] ?? '';
            $radio_options=[
            'first' => 'Option 1',
            'second' => 'Option 2',
            'third' => 'Option 3',
            'fourth' => 'Option 4',
            'fifth' => 'Option 5',
            'sixth' => 'Option 6',

            ];
            $i=0;
        ?>
        <form name='index_form' method='post' onsubmit="return validate()">
            <label for='fname'>Text Input:</label><br>
            <input type='text' id='fname' name='fname' value="<?php echo htmlspecialchars($fname);?>"><span class='err'>*</span><br>
            <?php foreach ($radio_options as $value => $label): ?>
                <input type='radio' id='<?php echo $value;?>' name='radio_cluster' value='<?php echo $value;?>'
                    <?php if ($radio===$value) echo 'checked'; ?>>
                   <?php echo $label;?>
                        <?php if ($i%2===1) echo '<br>';
                        $i++;?>
                   <?php endforeach;?>
            <input type='checkbox' id='check' name='checkbox1' value='checked'<?php if ($checked) echo 'checked'; ?>> This is a checkbox<br>
            <input type='submit' name='submit_btn' value='Submit Above Content'>
        </form>
    <script>
        function validate() {
            var x = document.forms['index_form']['fname'].value;
            if (x==""){
            alert("Text input must be provided.");
            return false;
            }
        }
    </script>
    </main>
    </body>
    </html>
    <?php
require_once __DIR__ . "/../includes/footer.php";
?>
