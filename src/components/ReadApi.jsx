import { useState, useEffect } from "react";

const useReadApi = () => {
  const [posts, setPosts] = useState([]);
  const [loading, setLoading] = useState(true);
  const [error, setError] = useState(null);

  useEffect(() => {
    fetch("http://127.0.0.1:8000/api/panorama/", {
      "Content-Type": "application/json",
    })
      .then((response) => {
        if (!response.ok) throw new Error("Network response was not ok");
        return response.json();
      })
      .then((data) => {
        setPosts(data.pages);
      })
      .catch((err) => {
        console.error("API Error:", err);
        setError(err.message);
        setLoading(false);
      });
  }, []);

  return { posts, loading, error };
};

export default useReadApi;
