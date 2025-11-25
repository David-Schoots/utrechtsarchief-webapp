import { useMemo, useState } from "react";
import { useNavigate, useParams } from "react-router-dom";
import CmsShell from "./CmsShell";
import { useCmsData } from "./CmsDataContext";

export default function CmsEdit() {
  const navigate = useNavigate();
  const { id } = useParams();
  const { getItem, updateItem } = useCmsData();

  const item = getItem(id);

  const defaults = useMemo(
    () =>
      item ?? {
        id,
        title: `Item ${id ?? ""}`.trim(),
        desc: "Voeg hier een beschrijving toe.",
        img: "",
      },
    [item, id],
  );

  const [title, setTitle] = useState(defaults.title);
  const [desc, setDesc] = useState(defaults.desc);
  const [image, setImage] = useState(defaults.img);
  const previewImage = image || defaults.img;

  const handleSubmit = (event) => {
    event.preventDefault();
    updateItem(defaults.id, { title, desc, img: image });
    alert("Wijzigingen opgeslagen!");
    navigate("/cms");
  };

  return (
    <CmsShell>
      <section className="cms-panel">
        <button
          type="button"
          className="cms-back-button"
          onClick={() => navigate("/cms")}
        >
          <span aria-hidden="true">←</span> Terug naar overzicht
        </button>

        <div className="cms-panel__head">
          <div>
            <p className="cms-section-title">Item bewerken</p>
            <p className="cms-section-subtitle">
              Werk de inhoud bij en vergeet niet om uw wijzigingen op te slaan.
            </p>
          </div>
        </div>
        <span className="cms-panel__divider" aria-hidden="true" />

        <form className="cms-edit-form" onSubmit={handleSubmit}>
          <label className="cms-field">
            <span className="cms-field__label">Titel</span>
            <input
              type="text"
              className="cms-input"
              value={title}
              onChange={(event) => setTitle(event.target.value)}
            />
          </label>

          <label className="cms-field">
            <span className="cms-field__label">Beschrijving</span>
            <textarea
              className="cms-input cms-input--textarea"
              value={desc}
              onChange={(event) => setDesc(event.target.value)}
            />
          </label>

          <label className="cms-field">
            <span className="cms-field__label">Afbeelding URL</span>
            <input
              type="url"
              className="cms-input"
              value={image}
              onChange={(event) => setImage(event.target.value)}
            />
          </label>

          <div className="cms-preview">
            <span className="cms-field__label">Voorbeeld afbeelding</span>
            {previewImage ? (
              <div className="cms-preview__frame">
                <img src={previewImage} alt="Voorbeeld" loading="lazy" />
              </div>
            ) : (
              <p className="cms-preview__placeholder">
                Voeg een afbeelding toe om het voorbeeld te zien.
              </p>
            )}
          </div>

          <div className="cms-form-actions">
            <button type="submit" className="cms-btn cms-btn--primary">
              Opslaan
            </button>
            <button
              type="button"
              className="cms-btn cms-btn--ghost"
              onClick={() => navigate("/cms")}
            >
              Annuleren
            </button>
          </div>
        </form>
      </section>
    </CmsShell>
  );
}
