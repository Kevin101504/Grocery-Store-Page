<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shop</title>
    <link rel="stylesheet" href="styleprod.css">
    <!-- Include any other CSS or meta tags as needed -->
     <script src="scriptprod.js"></script>
</head>
<body>
    <header>
        <div class="container">
            <h1>Our Grocery Store</h1>
            <nav>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="products.php">Shop</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="cartmenubtn">
        <a href="#cart">Go To Cart</a>
    </div>

    <div class="topicsbuttn">
        <div class="topbtn">
            <p>CATEGORIES</p>
        </div>
       
        <div class="topics">
                <ul>
                    <li><a href="#fruits">Fruits and Vegetables</a></li>
                    <li><a href="#dairy">Dairy</a></li>
                    <li><a href="#Meat">Meat and Seafood</a></li>
                    <li><a href="#Pantry">Pantry Staples</a></li>
                    <li><a href="#Beverages">Beverages</a></li>
                    <li><a href="#Snacks">Snacks and Sweets</a></li>
                    <li><a href="#Health">Health and Cleaning</a></li>
                    <li><a href="#Bakery">Bakery</a></li>
                    <li><a href="#Frozen">Frozen Foods</a></li>
                </ul>

        </div>
    </div>

    <section id="products">
        <div class="container">
            <h2>Our Products</h2>
           
            <h2>Fruits And Vegetables</h2>
            <div id="fruits">
               
                <?php
                // Database connection parameters
                $host = "localhost"; // Host name
                $username = "root"; // MySQL username
                $password = ""; // MySQL password
                $database = "grocery_store"; // Database name

                // Create connection
                $conn = new mysqli($host, $username, $password, $database);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Fetch products from database
                $sql = "SELECT * FROM products WHERE id<7";
                $result = $conn->query($sql);

                // Output products
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '
                        <div class="product">
                            <img src="' . $row["image_url"] . '" alt="' . $row["name"] . '" width="400" height="400">
                            <h3>' . $row["name"] . '</h3>
                            <p>' . $row["description"] . '</p>
                            <p><strong>Price:</strong> ' . $row["price"] . ' Rupees</p>
                            <div class="quantity">
                                <button class="minus-btn" onclick="decreaseQuantity(' . $row["id"] . ')">-</button>
                                <input type="text" id="quantity-' . $row["id"] . '" value="0" readonly>
                                <button class="plus-btn" onclick="increaseQuantity(' . $row["id"] . ')">+</button>
                                <button class="add-to-cart-btn" onclick="addToCart(' . $row["id"] . ', \'' . $row["name"] . '\' ,\' ' . $row["price"] . '\' )">Add to Cart</button>
                            </div>
                        </div>';
                    }
                } else {
                    echo "No products found.";
                }

                // Close connection
                $conn->close();
                ?>
            </div>
            <h2>Dairy</h2>
            <div id="dairy">
                
            <?php
                // Database connection parameters
                $host = "localhost"; // Host name
                $username = "root"; // MySQL username
                $password = ""; // MySQL password
                $database = "grocery_store"; // Database name

                // Create connection
                $conn = new mysqli($host, $username, $password, $database);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Fetch products from database
                $sql = "SELECT * FROM products WHERE id>6 AND id<11";
                $result = $conn->query($sql);

                // Output products
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '
                        <div class="product">
                            <img src="' . $row["image_url"] . '" alt="' . $row["name"] . '" width="400" height="400">
                            <h3>' . $row["name"] . '</h3>
                            <p>' . $row["description"] . '</p>
                            <p><strong>Price:</strong> ' . $row["price"] . ' Rupees</p>
                            <div class="quantity">
                                <button class="minus-btn" onclick="decreaseQuantity(' . $row["id"] . ')">-</button>
                                <input type="text" id="quantity-' . $row["id"] . '" value="0" readonly>
                                <button class="plus-btn" onclick="increaseQuantity(' . $row["id"] . ')">+</button>
                                <button class="add-to-cart-btn" onclick="addToCart(' . $row["id"] . ', \'' . $row["name"] . '\' ,\' ' . $row["price"] . '\' )">Add to Cart</button>
                            </div>
                        </div>';
                    }
                } else {
                    echo "No products found.";
                }

                // Close connection
                $conn->close();
                ?>
            </div>
            <h2>Meat And Seafood</h2>
            <div id="Meat">
                
                <?php
                // Database connection parameters
                $host = "localhost"; // Host name
                $username = "root"; // MySQL username
                $password = ""; // MySQL password
                $database = "grocery_store"; // Database name

                // Create connection
                $conn = new mysqli($host, $username, $password, $database);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Fetch products from database
                $sql = "SELECT * FROM products WHERE id>10 AND id<15";
                $result = $conn->query($sql);

                // Output products
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '
                        <div class="product">
                            <img src="' . $row["image_url"] . '" alt="' . $row["name"] . '" width="400" height="400">
                            <h3>' . $row["name"] . '</h3>
                            <p>' . $row["description"] . '</p>
                            <p><strong>Price:</strong> ' . $row["price"] . ' Rupees</p>
                            <div class="quantity">
                                <button class="minus-btn" onclick="decreaseQuantity(' . $row["id"] . ')">-</button>
                                <input type="text" id="quantity-' . $row["id"] . '" value="0" readonly>
                                <button class="plus-btn" onclick="increaseQuantity(' . $row["id"] . ')">+</button>
                                <button class="add-to-cart-btn" onclick="addToCart(' . $row["id"] . ', \'' . $row["name"] . '\' ,\' ' . $row["price"] . '\' )">Add to Cart</button>
                            </div>
                        </div>';
                    }
                } else {
                    echo "No products found.";
                }

                // Close connection
                $conn->close();
                ?>

            </div>
            <h2>Pantry Staples</h2>
            <div id="Pantry">
               
                <?php
                // Database connection parameters
                $host = "localhost"; // Host name
                $username = "root"; // MySQL username
                $password = ""; // MySQL password
                $database = "grocery_store"; // Database name

                // Create connection
                $conn = new mysqli($host, $username, $password, $database);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Fetch products from database
                $sql = "SELECT * FROM products WHERE id>14 AND id<19";
                $result = $conn->query($sql);

                // Output products
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '
                        <div class="product">
                            <img src="' . $row["image_url"] . '" alt="' . $row["name"] . '" width="400" height="400">
                            <h3>' . $row["name"] . '</h3>
                            <p>' . $row["description"] . '</p>
                            <p><strong>Price:</strong> ' . $row["price"] . ' Rupees</p>
                            <div class="quantity">
                                <button class="minus-btn" onclick="decreaseQuantity(' . $row["id"] . ')">-</button>
                                <input type="text" id="quantity-' . $row["id"] . '" value="0" readonly>
                                <button class="plus-btn" onclick="increaseQuantity(' . $row["id"] . ')">+</button>
                                <button class="add-to-cart-btn" onclick="addToCart(' . $row["id"] . ', \'' . $row["name"] . '\' ,\' ' . $row["price"] . '\' )">Add to Cart</button>
                            </div>
                        </div>';
                    }
                } else {
                    echo "No products found.";
                }

                // Close connection
                $conn->close();
                ?>

            </div>
            <h2>Beverages</h2>
            <div id="Beverages">
                
                <?php
                // Database connection parameters
                $host = "localhost"; // Host name
                $username = "root"; // MySQL username
                $password = ""; // MySQL password
                $database = "grocery_store"; // Database name

                // Create connection
                $conn = new mysqli($host, $username, $password, $database);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Fetch products from database
                $sql = "SELECT * FROM products WHERE id>18 AND id<23";
                $result = $conn->query($sql);

                // Output products
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '
                        <div class="product">
                            <img src="' . $row["image_url"] . '" alt="' . $row["name"] . '" width="400" height="400">
                            <h3>' . $row["name"] . '</h3>
                            <p>' . $row["description"] . '</p>
                            <p><strong>Price:</strong> ' . $row["price"] . ' Rupees</p>
                            <div class="quantity">
                                <button class="minus-btn" onclick="decreaseQuantity(' . $row["id"] . ')">-</button>
                                <input type="text" id="quantity-' . $row["id"] . '" value="0" readonly>
                                <button class="plus-btn" onclick="increaseQuantity(' . $row["id"] . ')">+</button>
                                <button class="add-to-cart-btn" onclick="addToCart(' . $row["id"] . ', \'' . $row["name"] . '\' ,\' ' . $row["price"] . '\' )">Add to Cart</button>
                            </div>
                        </div>';
                    }
                } else {
                    echo "No products found.";
                }

                // Close connection
                $conn->close();
                ?>

            </div>
            <h2>Snacks And Sweets</h2>
            <div id="Snacks">
                
                <?php
                // Database connection parameters
                $host = "localhost"; // Host name
                $username = "root"; // MySQL username
                $password = ""; // MySQL password
                $database = "grocery_store"; // Database name

                // Create connection
                $conn = new mysqli($host, $username, $password, $database);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Fetch products from database
                $sql = "SELECT * FROM products WHERE id>22 AND id<27";
                $result = $conn->query($sql);

                // Output products
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '
                        <div class="product">
                            <img src="' . $row["image_url"] . '" alt="' . $row["name"] . '" width="400" height="400">
                            <h3>' . $row["name"] . '</h3>
                            <p>' . $row["description"] . '</p>
                            <p><strong>Price:</strong> ' . $row["price"] . ' Rupees</p>
                            <div class="quantity">
                                <button class="minus-btn" onclick="decreaseQuantity(' . $row["id"] . ')">-</button>
                                <input type="text" id="quantity-' . $row["id"] . '" value="0" readonly>
                                <button class="plus-btn" onclick="increaseQuantity(' . $row["id"] . ')">+</button>
                                <button class="add-to-cart-btn" onclick="addToCart(' . $row["id"] . ', \'' . $row["name"] . '\' ,\' ' . $row["price"] . '\' )">Add to Cart</button>
                            </div>
                        </div>';
                    }
                } else {
                    echo "No products found.";
                }

                // Close connection
                $conn->close();
                ?>

            </div>
            <h2>Health And Cleaning</h2>
            <div id="Health">
                
                <?php
                // Database connection parameters
                $host = "localhost"; // Host name
                $username = "root"; // MySQL username
                $password = ""; // MySQL password
                $database = "grocery_store"; // Database name

                // Create connection
                $conn = new mysqli($host, $username, $password, $database);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Fetch products from database
                $sql = "SELECT * FROM products WHERE id>26 AND id<32";
                $result = $conn->query($sql);

                // Output products
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '
                        <div class="product">
                            <img src="' . $row["image_url"] . '" alt="' . $row["name"] . '" width="400" height="400">
                            <h3>' . $row["name"] . '</h3>
                            <p>' . $row["description"] . '</p>
                            <p><strong>Price:</strong> ' . $row["price"] . ' Rupees</p>
                            <div class="quantity">
                                <button class="minus-btn" onclick="decreaseQuantity(' . $row["id"] . ')">-</button>
                                <input type="text" id="quantity-' . $row["id"] . '" value="0" readonly>
                                <button class="plus-btn" onclick="increaseQuantity(' . $row["id"] . ')">+</button>
                                <button class="add-to-cart-btn" onclick="addToCart(' . $row["id"] . ', \'' . $row["name"] . '\' ,\' ' . $row["price"] . '\' )">Add to Cart</button>
                            </div>
                        </div>';
                    }
                } else {
                    echo "No products found.";
                }

                // Close connection
                $conn->close();
                ?>

            </div>
            <h2>Bakery</h2>
            <div id="Bakery">
                
                <?php
                // Database connection parameters
                $host = "localhost"; // Host name
                $username = "root"; // MySQL username
                $password = ""; // MySQL password
                $database = "grocery_store"; // Database name

                // Create connection
                $conn = new mysqli($host, $username, $password, $database);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Fetch products from database
                $sql = "SELECT * FROM products WHERE id>31 AND id<35";
                $result = $conn->query($sql);

                // Output products
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '
                        <div class="product">
                            <img src="' . $row["image_url"] . '" alt="' . $row["name"] . '" width="400" height="400">
                            <h3>' . $row["name"] . '</h3>
                            <p>' . $row["description"] . '</p>
                            <p><strong>Price:</strong> ' . $row["price"] . ' Rupees</p>
                            <div class="quantity">
                                <button class="minus-btn" onclick="decreaseQuantity(' . $row["id"] . ')">-</button>
                                <input type="text" id="quantity-' . $row["id"] . '" value="0" readonly>
                                <button class="plus-btn" onclick="increaseQuantity(' . $row["id"] . ')">+</button>
                                <button class="add-to-cart-btn" onclick="addToCart(' . $row["id"] . ', \'' . $row["name"] . '\' ,\' ' . $row["price"] . '\' )">Add to Cart</button>
                            </div>
                        </div>';
                    }
                } else {
                    echo "No products found.";
                }

                // Close connection
                $conn->close();
                ?>

            </div>
            <h2>Frozen Foods</h2>
            <div id="Frozen">
               
                <?php
                // Database connection parameters
                $host = "localhost"; // Host name
                $username = "root"; // MySQL username
                $password = ""; // MySQL password
                $database = "grocery_store"; // Database name

                // Create connection
                $conn = new mysqli($host, $username, $password, $database);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Fetch products from database
                $sql = "SELECT * FROM products WHERE id>34";
                $result = $conn->query($sql);

                // Output products
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '
                        <div class="product">
                            <img src="' . $row["image_url"] . '" alt="' . $row["name"] . '" width="400" height="400">
                            <h3>' . $row["name"] . '</h3>
                            <p>' . $row["description"] . '</p>
                            <p><strong>Price:</strong> ' . $row["price"] . ' Rupees</p>
                            <div class="quantity">
                                <button class="minus-btn" onclick="decreaseQuantity(' . $row["id"] . ')">-</button>
                                <input type="text" id="quantity-' . $row["id"] . '" value="0" readonly>
                                <button class="plus-btn" onclick="increaseQuantity(' . $row["id"] . ')">+</button>
                                <button class="add-to-cart-btn" onclick="addToCart(' . $row["id"] . ', \'' . $row["name"] . '\' ,\' ' . $row["price"] . '\' )">Add to Cart</button>
                            </div>
                        </div>';
                    }
                } else {
                    echo "No products found.";
                }

                // Close connection
                $conn->close();
                ?>

            </div>
        </div>
    </section>
    <section id="cart">
       <div class="cart-container">
        <h2>Cart</h2>
        <ul id="cart-items">
            <!-- Cart items will be dynamically added here -->
            </ul>
            <span id="total">Total: $0</span>
        <button id="checkoutbutton" onclick="checkout()">Checkout</button>
        </div>
    </section>

    <footer>
        <div id="container">
            <p>&copy; 2024 Our Grocery Store. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
