import { ref } from 'vue'
import axios from 'axios'

export default function useCourse() {

    const course = ref([])

    const getCourse = async (id) => {
        let res = await axios.get(`/api/cours/${id}`)
        course.value = res.data.course
    }

    return {
        course,
        getCourse
    }
}
