import { useEffect, useState } from "react";
import api from "../services/api";

function SearchHistory() {
  const [history, setHistory] = useState([]);

  useEffect(() => {
    api
      .get("/search-history")
      .then((res) => {
        setHistory(res.data);
      })
      .catch((err) => {
        console.error(err);
      });
  }, []);

  if (history.length === 0) {
    return <h2 className="text-center mt-10">Belum ada riwayat pencarian</h2>;
  }

  return (
    <div style={{ padding: "20px" }}>
      <h1>Riwayat Pencarian</h1>

      {history.map((item) => (
        <div
          key={item.id}
          style={{
            border: "1px solid #ccc",
            padding: "10px",
            marginBottom: "10px",
            borderRadius: "8px",
          }}
        >
          {item.keyword}
        </div>
      ))}
    </div>
  );
}

export default SearchHistory;
