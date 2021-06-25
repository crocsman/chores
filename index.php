<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">

        <link href="styles/style.css" rel="stylesheet">
        

        <title>Chores Are Fun</title>
    </head>
    <body>
<?php
echo "My first PHP script!";
?> 

        <div class="pageTitle"> 
            <h1>Chores and More</h1>
        </div>
        
        <!--Calendar-->
        <div id="month"> 
            <p>Month?</p>
        </div>

        <div id="days"> 
            <ul>
                <li>1</li>
                <li>2</li>
                <li>3</li>
                <li>4</li>
                <li>5</li>
                <li>6</li>
                <li>7</li>
                <li>8</li>
                <li>9</li>
                <li>10</li>
                <li>11</li>
                <li>12</li>
                <li>13</li>
                <li>14</li>
                <li>15</li>
                <li>16</li>
                <li>17</li>
                <li>18</li>
                <li>19</li>
                <li>20</li>
                <li>21</li>
                <li>22</li>
                <li>23</li>
                <li>24</li>
                <li>25</li>
                <li>26</li>
                <li>27</li>
                <li>28</li>
                <li>29</li>
                <li>30</li>
                <li>31</li>
            </ul>

            <!-- sign up form https://www.youtube.com/watch?v=fNcJuPIZ2WE-->
            <form id = "signup1">
                <div>
                    <label>Adam enter chore date :</label>
                    <input id = "Adam">
                    <button type="button" onclick="person1();">submit</button><br>
                </div>
            </form>    
            <form id = "signup2">
                <div>
                    <label>Annika enter chore date :</label>
                    <input id = "Annika">
                    <button type="button" onclick="person2()">submit</button><br>
                </div>    

            </form>
            
            <div id = "person1dates">
                <p></p>
            </div>
            <div id = "person2dates">
                <h1>Annika</h1>
                <p></p>

            </div>
        </div>
        <script src="scripts/main.js"></script>
    </body>

</html>
