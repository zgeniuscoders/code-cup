<template>
  <button
    type="button"
    class="
      text-white
      py-1
      px-2
      rounded
      mt-4
      inline-block
      text-sm
      active:outline active:outline-3 active:outline-blue-900
    "
    :class="
      this.isWatched
        ? 'bg-blue-700 hover:bg-blue-800'
        : 'bg-green-700 hover:bg-green-900'
    "
    @click.prevent="toggleProgress"
  >
    {{ this.isWatched ? "non terminé" : "terminé ?" }}
  </button>
</template>


<script>
import axios from "axios";
export default {
  props: ["episodeId", "watchedEpisode"],

  data() {
    return {
      watchedEp: this.watchedEpisode,
      isWatched: null,
    };
  },

  methods: {
    toggleProgress() {
      axios
        .post("/toggle-progress", {
          episodeId: this.episodeId,
        })
        .then((res) => {
          if (res.status === 200) this.isWatched = !this.isWatched;
          const emitter = require("tiny-emitter/instance");

          emitter.emit("toggleProgress", res.data);
        })
        .catch((error) => console.log(error));
    },
    isWatchedEpisode() {
      return this.watchedEp.find((ep) => ep.id === this.episodeId)
        ? true
        : false;
    },
  },
  mounted() {
    this.isWatched = this.isWatchedEpisode();
  },
};
</script>