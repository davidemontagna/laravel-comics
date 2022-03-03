<header>
    <div class="container">
      <div class="logo-dc">
        <img src="{{asset('images/dc-logo.png')}}" alt="">
      </div>
      <nav>
        <ul>
          <li v-for="(link, index) in links" :key="index" :class="{'active' : link.current}">
            <a href="#" >{{link.text}}</a>
          </li>
        </ul>
      </nav>
    </div>
</header>