<template>
<div class="status-bar">
  <span>{{ time }}</span>
  <span>Logged in as <b>{{ user }}</b></span>
</div>
</template>

<script>
export default {
  name: 'StatusBar',
  props:{
    user: String,
  },
  data(){
    return {
      time: null,
    }
  },
  created(){
    setInterval(this.getTime, 1000);
  },
  methods:{
    getTime(){
    let date = new Date();
    this.time = date.toLocaleTimeString("en-US", {timeStyle: 'short'});
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
.status-bar{
  width: 700px;
  height: 25px;
  background-color: rgb(56, 56, 56);
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 0 10px;
}

.status-bar span{
  color: white;
  font-size: 0.8rem;
}
</style>
