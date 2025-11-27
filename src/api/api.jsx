import axios from "axios";

const API_URL = process.env.REACT_APP_API_URL || "http://localhost:8000/api";

const getAuthHeaders = () => {
  const token = localStorage.getItem("token");
  return { Authorization: `Bearer ${token}` };
};

export const getPages = () => {
  return axios.get(`${API_URL}/pages`, { headers: getAuthHeaders() });
};
