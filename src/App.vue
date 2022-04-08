<template>
<div id="app">
  <chat-box/>
</div>
</template>

<script>
import ChatBox from './components/ChatBox.vue'

export default {
  name: 'App',
  components: {
    ChatBox
  },
}
</script>

<style lang="scss">
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body{
  font-family: 'Roboto', sans-serif;
}

#app {
  height: 100vh;
  width: 100%;
  background: linear-gradient(90deg, rgba(40,40,40,1) 0%, rgba(28,28,28,1) 100%);
  display: flex;
  justify-content: center;
  align-items: center;
}
</style>
