<template>
  <div class="hello">
    <div v-for="post of posts">
      <p><strong>{{post.name}}</strong><br/>{{post.adress}}<br/></p>
      <p>{{post.body}}</p><br/>
    </div>
  </div>
</template>

<script>
import axios from 'axios';
export default {
  name: 'HelloWorld',
  data() {
    return {
        posts: []
    }
  },
  created() {
    axios.get('http://api.codebreak.local/restaurant')
      .then(response => {
          this.posts = response.data.restaurant
      })
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h1, h2 {
  font-weight: normal;
}

ul {
  list-style-type: none;
  padding: 0;
}

li {
  display: inline-block;
  margin: 0 10px;
}

a {
  color: #42b983;
}
</style>
