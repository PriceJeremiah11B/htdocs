<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
        <title>Acme Home Page</title>

  </head>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <body>
   <section id="page">
       <header>
           <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/header.php'; ?>
       </header>
       <main>
           <section id="featureditem">
               <div>
                   <h2>Acme Food Fetcher 400</h2>
                   <ul>
                       <li>The Next Generation of Cathers! Faster than the best Roadrunner!</li>
                       <li>Won't let you down, and is long lasting!</li>
                       <li>Quick Fuse! Adjustible rate!</li>
                       <li><img src="/images/iwantit.png" alt="Buy Now"></li>
                   </ul>
               </div>
           </section>
           <ul id="features">
               <li>
                   <section id="trythis">
                       <h2>Try This Now!</h2>
                       <dl>
                           <dt><img src="/images/products/anvil.gif" alt="Acme Small Anvil"></dt>
                           <dd>Small Anvil</dd>
                           <dt><img src="/images/products/dynamite.gif" alt="Acme Dynamite Stick"></dt>
                           <dd>Explosive</dd>
                           <dt><img src="/images/products/trap.gif" alt="Acme Traps"></dt>
                           <dd>Trap</dd> 
                       </dl>
                   </section>
               </li>
               <li>
                   <section id="featuredrecipes">
                       <h2>Featured Recipes</h2>
                       <figure>
                           <img src="/images/recipes/bbqsand.jpg" alt="Acme BBQ Recipe">
                           <figcaption>Yumm BBQ</figcaption>
                       </figure>
                       <figure>
                           <img src="/images/recipes/potpie.jpg" alt="Acme Pot Pie Recipe">
                           <figcaption>Pot Pie</figcaption>
                       </figure>
                       <figure>
                           <img src="/images/recipes/soup.jpg" alt="Acme Soup Recipe">
                           <figcaption>Soup</figcaption>
                       </figure>
                   </section>
               </li>
               <li>
                   <section id="featuredreviews">
                       <h2>Featured Reviews</h2>
                       <ul>
                           <li>
                               <h3>Big Anvil!</h3>
                               <p>Does the job suuuuuper well...</p>
                           </li>
                           <li>
                               <h3>Small Anvil!</h3>
                               <p>Does the job kinda well...</p>
                           </li>
                           <li>
                               <h3>Monster Band!</h3>
                               <p>Much Power! Such Big</p>
                           </li>
                           <li>
                               <h3>Brain-Bucket!</h3>
                               <p>Keep it inside your skull!</p>
                           </li>
                       </ul>
                    </section>
               </li>
           </ul>
       </main>
       <footer>
            <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
           <p>Last updated: <?php echo date('j F, Y', getlastmod()) ?></p>
       </footer>
   </section>
  </body>

</html>
