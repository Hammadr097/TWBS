<?php
	// run query
	$query = mysql_query("SELECT * FROM posts");

	// set array
	$array = array();

	// look through query
	while($row = mysql_fetch_assoc($query)){


	echo "<tr>";

	echo "<td><center>";
	echo $row['ID'];
	echo "</center></td>";

	echo "<td><center>";
	echo $row['Title'];
	echo "</center></td>";

	echo "<td><center>";
	echo $row['Text'];
	echo "</center></td>";

	echo "<td><center>";
	echo $row['Genre'];
	echo "</center></td>";

	echo "<td><center>";
	echo $row['FavCount'];
	echo "</center></td>";

	echo "<td><center>";
	echo '<a href="delete-post.php?id=' . $row['ID'] . ' "><i class="fa fa-trash"></i></a>';
	echo "</center></td>";

	echo "</td>";
	echo "</tr>";
	}
?>

<div class="wrapper">
	<br>
	<br>
	<div class="form-group" id="for1">
	  <input type="search" class="form-control" data-provide="typeahead" id="search1" placeholder="Search...">
	</div>	
	<!-- you can use the class main-raised if you want the main area to be as a page with shadows -->
	<div class="main">
		<div class="container">
		  <div class="row">

		    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
		      <div class="thumbnail" data-toggle="modal" data-target="#GSCCModal"  data-todo='{"title":"The Real Winner","username":"Muhammad Ali","favcount":"321", "image":"https://scontent-mxp1-1.xx.fbcdn.net/v/t31.0-8/s720x720/24059403_2032368223503934_1157411341733837107_o.jpg?oh=06276bdb7aea4757105a6d5176c3a2fd&oe=5AC08E38", "story":"I almost married my high school sweetheart. She was a sharp girl. Very kind. Long brown hair, slim-- the whole package. We moved to California together after graduation. We spent all our time together. We were in love. We even talked about marriage several times. Then one morning she decided she didn’t want to do it anymore. She told me things had changed. It destroyed me. Ever since then, she’s been the one that I’ve always wondered about. I actually saw her a couple years ago. She came to New York for her father’s funeral, and we took a walk in Central Park together. I hadn’t seen her in forty-five years. She looked amazing. Exactly the same as I remembered. She had two kids. She’d gotten married to some guy from Yale. Toward the end of our walk, she told me that if she could do it all over again, she probably would have never married the guy. I said: ‘That breaks my heart, because all these years I imagined you were happy.’ Of course, there might have been a small part of me that was thinking: ‘Haha! You married the wrong guy."}'>
		        <img src="https://scontent-mxp1-1.xx.fbcdn.net/v/t31.0-8/s720x720/24059403_2032368223503934_1157411341733837107_o.jpg?oh=06276bdb7aea4757105a6d5176c3a2fd&oe=5AC08E38" class="">
		        <div class="caption">
		          <h3 id="thumbnail-label">The Real Winner</h3>
		          <p name = "story-caption" id="story-caption">I almost married my high school sweetheart. She was a sharp girl. Very kind....</p>
		        </div>
		        <div class="caption card-footer">
		          <ul class="list-inline">
		            <li><i class="fa fa-user"></i></li>
		            <li>321</li>
		            <li ><button class="like" type="button" class="btn btn-white "><i class="fa fa-heart-o fa-1x"></i></button></li>
		            <li class="suser" style="text-decoration: underline;">Muhammad Ali</li>
		          </ul>
		        </div>
		      </div>
		    </div>

		    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 ">
		       <div class="thumbnail" data-toggle="modal" data-target="#GSCCModal"  data-todo='{"title":"A Catastrophic Divorce","username":"Ham PC", "image":"https://scontent-mxp1-1.xx.fbcdn.net/v/t31.0-8/25182127_2060810173993072_1272981479163134608_o.jpg?oh=dbda185d7558f0bfc2dbab227a248697&oe=5AC9B00A", "story":"A really bad divorce triggered the first and only manic episode of my life. It was my body’s attempt to avoid feeling any pain. I was sleeping three hours a night and doing handstands in the morning. I did a whole lot of writing. I’m a contractor-- so I taught myself all sorts of plastering techniques and developed an entire series of finishes. I worked as a carpenter for twelve hours every day. Eventually I pushed myself to the point where I injured my shoulder, and the doctor told me that I couldn’t work anymore. It forced me to slow down, confront the illness, and make friends with that part of myself. Now I’m on a mood stabilizer. I’m not operating in a triggered state anymore. And I’m back to work, but this time with a team of people to help me carry the load."}'>
		        <img src="https://scontent-mxp1-1.xx.fbcdn.net/v/t31.0-8/25182127_2060810173993072_1272981479163134608_o.jpg?oh=dbda185d7558f0bfc2dbab227a248697&oe=5AC9B00A" class="">
		        <div class="caption">
		          <h3 id="thumbnail-label">A Catastrophic Divorce</h3>
		          <p>A really bad divorce triggered the first and only manic episode of my life...</p>
		        </div>
		        <div class="caption card-footer">
		          <ul class="list-inline">
		            <li><i class="fa fa-user"></i></li>
		            <li>299</li>
		            <li ><button class="like" type="button" class="btn btn-white "><i class="fa fa-heart-o fa-1x"></i></button></li>
		            <li class="suser" style="text-decoration: underline;">Ham PC</li>
		          </ul>
		        </div>
		      </div>
		    </div>
		    <div class="clearfix visible-sm visible-md"></div>
		    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
		      <div class="thumbnail" data-toggle="modal" data-target="#GSCCModal"  data-todo='{"title":"A Quantumn of Solace","username":"blob", "image":"https://scontent-mxp1-1.xx.fbcdn.net/v/t31.0-8/15896002_1546736828733745_5714114089696002959_o.jpg?oh=0d6f7a992f4a5b83a8335beff06b4e73&oe=5AD4D038", "story":"My mom and I have always been close. But we had to learn how to communicate again after my dad died. It took therapy. We’d stopped being honest with each other. My dad’s illness had been so stressful that we didn’t want to create any additional worries. So we tried to protect each other. Neither of us would admit if we were having a bad day. Or if we were feeling depressed. The answer to everything was always: ‘I’m fine.’ But we weren’t fine. And it was obvious. So we worried about each other all the time. It caused a lot of stress and arguments. We had to relearn how to admit when we were having a bad day. Because you can never truly know if someone&#39;s &#39;fine&#39; unless you trust them to tell you when something&#39;s wrong."}'>
		        <img src="https://scontent-mxp1-1.xx.fbcdn.net/v/t31.0-8/15896002_1546736828733745_5714114089696002959_o.jpg?oh=0d6f7a992f4a5b83a8335beff06b4e73&oe=5AD4D038" class="">
		        <div class="caption">
		          <h3 id="thumbnail-label">A Quantumn of Solace</h3>
		          <p>My mom and I have always been close. But we had to learn how to communicate again ...</p>
		        </div>
		        <div class="caption card-footer">
		          <ul class="list-inline">
		            <li><i class="fa fa-user"></i></li>
		            <li>217</li>
		            <li ><button class="like" type="button" class="btn btn-white "><i class="fa fa-heart-o fa-1x"></i></button></li>
		            <li class="suser" style="text-decoration: underline;">blob</li>
		          </ul>
		        </div>
		      </div>
		    </div>
		    <div class="clearfix visible-lg visible-xl"></div>
		    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
		      <div class="thumbnail">
		        <img src="https://scontent-mxp1-1.xx.fbcdn.net/v/t31.0-8/18121887_1703447276396032_7752154483041905558_o.jpg?oh=bad3d73b1fef49d83926debbd9ce59df&oe=5ABEF595" class="">
		        <div class="caption">
		          <h3 id="thumbnail-label">Obsessive Compulsion</h3>
		          <p>I’m about to meet up with my ex-girlfriend. We broke up two weeks ago and I’m hoping to get back together with her. I restricted her freedom too much. I scheduled all our classes together. I always wanted to know where she was. It all started a year ago when she cheated on me. She called me immediately afterwards and confessed. But ever since then, anytime she’s away from me, I always imagine the worst. She goes out with friends and some of them are male. So it’s hard for me to not get suspicious. And if I get suspicious, she gets nervous. Which makes me even more suspicious.</p>
		        </div>
		        <div class="caption card-footer">
		          <ul class="list-inline">
		            <li><i class="fa fa-user"></i></li>
		            <li>210</li>
		            <li ><button class="like" type="button" class="btn btn-white "><i class="fa fa-heart-o fa-1x"></i></button></li>
		          </ul>
		        </div>
		      </div>
		    </div> <div class="clearfix visible-sm visible-md"></div>
		    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
		      <div class="thumbnail">
		        <img src="https://scontent-mxp1-1.xx.fbcdn.net/v/t31.0-8/18402159_1731249050282521_5617620739713873442_o.jpg?oh=d3e25a2f7fc19ed57e44eb4cbf8135ef&oe=5ACA16E3" class="">
		        <div class="caption">
		          <h3 id="thumbnail-label">Orthodox Artist</h3>
		          <p>I’m obsessive, but my obsessions are productive. I’m happy. I never get depressed. I find life very interesting. I paint for hours every day. I have 100,000 postcards at home organized geographically. And I’ve written a thumbnail about every day of my life between 1981 and 2011. I have 20,000 pages of notes. Right now I’m in the editing phase. I’ll be done with that in a couple years, and then I’m going to copy the entire thing by hand. There's no way I can trust computers with something this important. I think I can finish the job in ten years. I’m pretty sure I can live long enough.</p>
		        </div>
		        <div class="caption card-footer">
		          <ul class="list-inline">
		            <li><i class="fa fa-user"></i></li>
		            <li>198</li>
		            <li ><button class="like" type="button" class="btn btn-white "><i class="fa fa-heart-o fa-1x"></i></button></li>
		          </ul>
		        </div>
		      </div>
		    </div> 
		    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
		      <div class="thumbnail">
		        <img src="https://scontent-mxp1-1.xx.fbcdn.net/v/t31.0-8/17311185_1641445309262896_3608845595304773431_o.jpg?oh=93b505e095c2c7a816fb61f82c2c0038&oe=5ACA899A" class="">
		        <div class="caption">
		          <h3 id="thumbnail-label">Abusive Relationships</h3>
		          <p>The only time my mother spoke to us was when she was drunk. And she’d tell us we were unwanted. She convinced me to drink with her when I was ten. She told me that it would make me feel better. I started smoking crack when I was twelve. I never learned to read or write. I lost my entire childhood. My friends and I would break into cars, steal whatever we could, and use the money to buy more. It made me feel good and I wanted to feel good all the time. And nobody ever tried to stop me.</p>
		        </div>
		        <div class="caption card-footer">
		          <ul class="list-inline">
		            <li><i class="fa fa-user"></i></li>
		            <li>112</li>
		            <li ><button class="like" type="button" class="btn btn-white "><i class="fa fa-heart-o fa-1x"></i></button></li>
		          </ul>
		        </div>
		      </div>
		    </div>    
		  </div><!-- row -->
		</div> <!-- container grid -->

			<!-- here you can add your content -->
			
		</div>
	</div>
</div>


<div id="GSCCModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="myModalLabel"></h3>
      </div> 
      <img id="mimg" src="" >
      <div class="modal-body">
        <p name = "mcaption" id="mcaption"></p>
      </div>
      <div class="modal-footer">
      	<ul class="list-inline">
      		<li id="muser"></li>
			<li><i class="fa fa-user"></i></li>
			<li id="mfav"></li>
			<li ><button type="button" class="btn btn-white "><i class="fa fa-heart-o fa-1x"></i></button></li>
	    </ul>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

