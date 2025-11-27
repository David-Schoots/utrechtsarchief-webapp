import { useState, useEffect } from "react";

const useReadApi = () => {
  const [posts, setPosts] = useState([]); // To store the API data
  const [loading, setLoading] = useState(true); // To track the loading state
  const [error, setError] = useState(null); // To handle any errors

  useEffect(() => {
    // Fetch data from the API
    fetch("http://127.0.0.1:8000/api/panorama/")
      .then((response) => response.json())
      .then((data) => {
        setPosts(data); // Set data to state
        setLoading(false); // Set loading to false once data is fetched
      })
      .catch((err) => {
        setError(err.message); // Set error if something goes wrong
        setLoading(false); // Set loading to false even on error
      });
  }, []); // Empty dependency array, meaning it runs only once when the component mounts

  return { posts, loading, error }; // Return data, loading state, and error
};

export default useReadApi;
