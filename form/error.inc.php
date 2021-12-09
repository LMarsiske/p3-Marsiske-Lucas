<style>
    #nav {
        list-style-type: none;
    }

    #home {
        text-decoration: none;
        font: 24px "Futura PT", sans-serif;
    }

    h1 {
        font: 48px "Futurist", sans-serif;
    }

    p {
        font: 16px "Georama", sans-serif;
    }
</style>
<header>
    <nav>
        <ul id="nav">
            <li>
            <a href="extras.html" id="home">&#129044; Return to extras</a>
            </li>
        </ul>
    </nav>
</header>
<div>
    <h1>Missing fields</h1>
    <p>Sorry, you have not completed all of the required fields.</p>
    <p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

    <ul>
    <?php
        for($i=0; $i<count($this->missing_required_fields); $i++){
            echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
        }
    ?>
    </ul>

    <p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>
</div>