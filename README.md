# campus4allorg

Theme principal del sitio WordPress Campus4All.

## Desarrollo Local

- **Proyecto Local**: `/Users/rebecakarenmossetto/Local Sites/campus4allorg/app/public/wp-content/themes/hillel-combating-antisemitism/`
- **URL local**: http://campus4allorg.local
- **Theme name**: hillel-combating-antisemitism

## Workflow

1. **Cambios en GitHub**: Se hacen vía Claude o manualmente en este repo
2. **Pull local**: `git pull origin main` desde `~/github-repos/campus4allorg`
3. **Verificar local**: Probar en http://campus4allorg.local
4. **Deploy a producción**: Subir archivos modificados por FTP al servidor de producción

### Deploy por FTP

- Conectar al servidor FTP de producción
- Subir **solo los archivos modificados** del theme
- Verificar que los cambios se vean correctamente en el sitio en vivo
- Si hay cambios en `package.json`, correr `npm install` localmente y subir archivos compilados

## Scripts disponibles

```bash
# Compilar Sass (watch mode)
npm run sass

# Instalar dependencias (después de pull si hay cambios en package.json)
npm install
```

## Estructura del Theme

Este theme usa:
- **Sass** para estilos (`scss/style.scss` → `style.css`)
- Archivos compilados no se commitean a GitHub

## Notas

- `node_modules/` está excluido del repo (ver `.gitignore`)
- Después de hacer `git pull`, si hay cambios en `package.json`, correr `npm install`

## ⚡ Sincronización rápida

Para sincronizar cambios desde GitHub y compilar automáticamente:

```bash
sync campus4allorg
```

Este comando hace:
1. Pull de los últimos cambios
2. Instala dependencias si es necesario
3. Compila assets con Gulp
4. Te avisa dónde ver los cambios
