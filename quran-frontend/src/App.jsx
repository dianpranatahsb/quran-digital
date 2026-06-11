import { BrowserRouter, Routes, Route } from "react-router-dom";
import Home from "./pages/Home";
import SurahDetail from "./pages/SurahDetail";
import PrayerTimes from "./pages/PrayerTimes";
import Navbar from "./components/Navbar";
import SearchHistory from "./pages/SearchHistory";

function App() {
    return (
        <BrowserRouter>
            <Navbar />

            <Routes>
                <Route path="/" element={<Home />} />
                <Route path="/surah/:id" element={<SurahDetail />} />
                <Route path="/prayer-times" element={<PrayerTimes />} />
                <Route path="/search-history" element={<SearchHistory />} />
            </Routes>
        </BrowserRouter>
    );
}

export default App;
