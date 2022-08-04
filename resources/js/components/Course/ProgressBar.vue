<template>
  <div>
    <div class="bg-gray-200 w-full rounded">
      <div
        class="
          bg-blue-800
          text-white
          rounded-l
          text-center
          transition-width
          duration-500
        "
        :style="`width: ${percentage}%`"
      >
        {{ percentage }}%
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["watchedEpisodes", "episodes"],

  data() {
    return {
      emitter: require("tiny-emitter/instance"),
      watchedEpisodesData: this.watchedEpisodes,
    };
  },

  computed: {
    percentage() {
      let filteredEp = this.episodes.filter((courseEp) => {
        return this.watchedEpisodes.find((watchEp) => {
          return watchEp.id === courseEp.id;
        });
      });

      return Math.ceil((filteredEp.length / this.episodes.length) * 100);
    },

    mounted() {
      const emitter = require("tiny-emitter/instance");
      emitter.on("toggleProgress", (data) => {
        alert(10);
        // this.watchedEpisodesData = data
      });
    },
  },
};
</script>