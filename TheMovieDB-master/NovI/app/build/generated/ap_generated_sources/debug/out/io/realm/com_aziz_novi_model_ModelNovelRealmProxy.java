package io.realm;


import android.annotation.TargetApi;
import android.os.Build;
import android.util.JsonReader;
import android.util.JsonToken;
import io.realm.ProxyUtils;
import io.realm.exceptions.RealmMigrationNeededException;
import io.realm.internal.ColumnInfo;
import io.realm.internal.OsList;
import io.realm.internal.OsObject;
import io.realm.internal.OsObjectSchemaInfo;
import io.realm.internal.OsSchemaInfo;
import io.realm.internal.Property;
import io.realm.internal.RealmObjectProxy;
import io.realm.internal.Row;
import io.realm.internal.Table;
import io.realm.internal.android.JsonUtils;
import io.realm.log.RealmLog;
import java.io.IOException;
import java.util.ArrayList;
import java.util.Collections;
import java.util.Date;
import java.util.HashMap;
import java.util.Iterator;
import java.util.List;
import java.util.Map;
import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

@SuppressWarnings("all")
public class com_aziz_novi_model_ModelNovelRealmProxy extends com.aziz.novi.model.ModelNovel
    implements RealmObjectProxy, com_aziz_novi_model_ModelNovelRealmProxyInterface {

    static final class ModelNovelColumnInfo extends ColumnInfo {
        long IdIndex;
        long TitleIndex;
        long VoteAverageIndex;
        long OverviewIndex;
        long ReleaseDateIndex;
        long PosterPathIndex;
        long BackdropPathIndex;
        long PopularityIndex;

        ModelNovelColumnInfo(OsSchemaInfo schemaInfo) {
            super(8);
            OsObjectSchemaInfo objectSchemaInfo = schemaInfo.getObjectSchemaInfo("ModelNovel");
            this.IdIndex = addColumnDetails("Id", "Id", objectSchemaInfo);
            this.TitleIndex = addColumnDetails("Title", "Title", objectSchemaInfo);
            this.VoteAverageIndex = addColumnDetails("VoteAverage", "VoteAverage", objectSchemaInfo);
            this.OverviewIndex = addColumnDetails("Overview", "Overview", objectSchemaInfo);
            this.ReleaseDateIndex = addColumnDetails("ReleaseDate", "ReleaseDate", objectSchemaInfo);
            this.PosterPathIndex = addColumnDetails("PosterPath", "PosterPath", objectSchemaInfo);
            this.BackdropPathIndex = addColumnDetails("BackdropPath", "BackdropPath", objectSchemaInfo);
            this.PopularityIndex = addColumnDetails("Popularity", "Popularity", objectSchemaInfo);
        }

        ModelNovelColumnInfo(ColumnInfo src, boolean mutable) {
            super(src, mutable);
            copy(src, this);
        }

        @Override
        protected final ColumnInfo copy(boolean mutable) {
            return new ModelNovelColumnInfo(this, mutable);
        }

        @Override
        protected final void copy(ColumnInfo rawSrc, ColumnInfo rawDst) {
            final ModelNovelColumnInfo src = (ModelNovelColumnInfo) rawSrc;
            final ModelNovelColumnInfo dst = (ModelNovelColumnInfo) rawDst;
            dst.IdIndex = src.IdIndex;
            dst.TitleIndex = src.TitleIndex;
            dst.VoteAverageIndex = src.VoteAverageIndex;
            dst.OverviewIndex = src.OverviewIndex;
            dst.ReleaseDateIndex = src.ReleaseDateIndex;
            dst.PosterPathIndex = src.PosterPathIndex;
            dst.BackdropPathIndex = src.BackdropPathIndex;
            dst.PopularityIndex = src.PopularityIndex;
        }
    }

    private static final OsObjectSchemaInfo expectedObjectSchemaInfo = createExpectedObjectSchemaInfo();

    private ModelNovelColumnInfo columnInfo;
    private ProxyState<com.aziz.novi.model.ModelNovel> proxyState;

    com_aziz_novi_model_ModelNovelRealmProxy() {
        proxyState.setConstructionFinished();
    }

    @Override
    public void realm$injectObjectContext() {
        if (this.proxyState != null) {
            return;
        }
        final BaseRealm.RealmObjectContext context = BaseRealm.objectContext.get();
        this.columnInfo = (ModelNovelColumnInfo) context.getColumnInfo();
        this.proxyState = new ProxyState<com.aziz.novi.model.ModelNovel>(this);
        proxyState.setRealm$realm(context.getRealm());
        proxyState.setRow$realm(context.getRow());
        proxyState.setAcceptDefaultValue$realm(context.getAcceptDefaultValue());
        proxyState.setExcludeFields$realm(context.getExcludeFields());
    }

    @Override
    @SuppressWarnings("cast")
    public int realmGet$Id() {
        proxyState.getRealm$realm().checkIfValid();
        return (int) proxyState.getRow$realm().getLong(columnInfo.IdIndex);
    }

    @Override
    public void realmSet$Id(int value) {
        if (proxyState.isUnderConstruction()) {
            if (!proxyState.getAcceptDefaultValue$realm()) {
                return;
            }
            final Row row = proxyState.getRow$realm();
            row.getTable().setLong(columnInfo.IdIndex, row.getIndex(), value, true);
            return;
        }

        proxyState.getRealm$realm().checkIfValid();
        proxyState.getRow$realm().setLong(columnInfo.IdIndex, value);
    }

    @Override
    @SuppressWarnings("cast")
    public String realmGet$Title() {
        proxyState.getRealm$realm().checkIfValid();
        return (java.lang.String) proxyState.getRow$realm().getString(columnInfo.TitleIndex);
    }

    @Override
    public void realmSet$Title(String value) {
        if (proxyState.isUnderConstruction()) {
            if (!proxyState.getAcceptDefaultValue$realm()) {
                return;
            }
            final Row row = proxyState.getRow$realm();
            if (value == null) {
                row.getTable().setNull(columnInfo.TitleIndex, row.getIndex(), true);
                return;
            }
            row.getTable().setString(columnInfo.TitleIndex, row.getIndex(), value, true);
            return;
        }

        proxyState.getRealm$realm().checkIfValid();
        if (value == null) {
            proxyState.getRow$realm().setNull(columnInfo.TitleIndex);
            return;
        }
        proxyState.getRow$realm().setString(columnInfo.TitleIndex, value);
    }

    @Override
    @SuppressWarnings("cast")
    public double realmGet$VoteAverage() {
        proxyState.getRealm$realm().checkIfValid();
        return (double) proxyState.getRow$realm().getDouble(columnInfo.VoteAverageIndex);
    }

    @Override
    public void realmSet$VoteAverage(double value) {
        if (proxyState.isUnderConstruction()) {
            if (!proxyState.getAcceptDefaultValue$realm()) {
                return;
            }
            final Row row = proxyState.getRow$realm();
            row.getTable().setDouble(columnInfo.VoteAverageIndex, row.getIndex(), value, true);
            return;
        }

        proxyState.getRealm$realm().checkIfValid();
        proxyState.getRow$realm().setDouble(columnInfo.VoteAverageIndex, value);
    }

    @Override
    @SuppressWarnings("cast")
    public String realmGet$Overview() {
        proxyState.getRealm$realm().checkIfValid();
        return (java.lang.String) proxyState.getRow$realm().getString(columnInfo.OverviewIndex);
    }

    @Override
    public void realmSet$Overview(String value) {
        if (proxyState.isUnderConstruction()) {
            if (!proxyState.getAcceptDefaultValue$realm()) {
                return;
            }
            final Row row = proxyState.getRow$realm();
            if (value == null) {
                row.getTable().setNull(columnInfo.OverviewIndex, row.getIndex(), true);
                return;
            }
            row.getTable().setString(columnInfo.OverviewIndex, row.getIndex(), value, true);
            return;
        }

        proxyState.getRealm$realm().checkIfValid();
        if (value == null) {
            proxyState.getRow$realm().setNull(columnInfo.OverviewIndex);
            return;
        }
        proxyState.getRow$realm().setString(columnInfo.OverviewIndex, value);
    }

    @Override
    @SuppressWarnings("cast")
    public String realmGet$ReleaseDate() {
        proxyState.getRealm$realm().checkIfValid();
        return (java.lang.String) proxyState.getRow$realm().getString(columnInfo.ReleaseDateIndex);
    }

    @Override
    public void realmSet$ReleaseDate(String value) {
        if (proxyState.isUnderConstruction()) {
            if (!proxyState.getAcceptDefaultValue$realm()) {
                return;
            }
            final Row row = proxyState.getRow$realm();
            if (value == null) {
                row.getTable().setNull(columnInfo.ReleaseDateIndex, row.getIndex(), true);
                return;
            }
            row.getTable().setString(columnInfo.ReleaseDateIndex, row.getIndex(), value, true);
            return;
        }

        proxyState.getRealm$realm().checkIfValid();
        if (value == null) {
            proxyState.getRow$realm().setNull(columnInfo.ReleaseDateIndex);
            return;
        }
        proxyState.getRow$realm().setString(columnInfo.ReleaseDateIndex, value);
    }

    @Override
    @SuppressWarnings("cast")
    public String realmGet$PosterPath() {
        proxyState.getRealm$realm().checkIfValid();
        return (java.lang.String) proxyState.getRow$realm().getString(columnInfo.PosterPathIndex);
    }

    @Override
    public void realmSet$PosterPath(String value) {
        if (proxyState.isUnderConstruction()) {
            if (!proxyState.getAcceptDefaultValue$realm()) {
                return;
            }
            final Row row = proxyState.getRow$realm();
            if (value == null) {
                row.getTable().setNull(columnInfo.PosterPathIndex, row.getIndex(), true);
                return;
            }
            row.getTable().setString(columnInfo.PosterPathIndex, row.getIndex(), value, true);
            return;
        }

        proxyState.getRealm$realm().checkIfValid();
        if (value == null) {
            proxyState.getRow$realm().setNull(columnInfo.PosterPathIndex);
            return;
        }
        proxyState.getRow$realm().setString(columnInfo.PosterPathIndex, value);
    }

    @Override
    @SuppressWarnings("cast")
    public String realmGet$BackdropPath() {
        proxyState.getRealm$realm().checkIfValid();
        return (java.lang.String) proxyState.getRow$realm().getString(columnInfo.BackdropPathIndex);
    }

    @Override
    public void realmSet$BackdropPath(String value) {
        if (proxyState.isUnderConstruction()) {
            if (!proxyState.getAcceptDefaultValue$realm()) {
                return;
            }
            final Row row = proxyState.getRow$realm();
            if (value == null) {
                row.getTable().setNull(columnInfo.BackdropPathIndex, row.getIndex(), true);
                return;
            }
            row.getTable().setString(columnInfo.BackdropPathIndex, row.getIndex(), value, true);
            return;
        }

        proxyState.getRealm$realm().checkIfValid();
        if (value == null) {
            proxyState.getRow$realm().setNull(columnInfo.BackdropPathIndex);
            return;
        }
        proxyState.getRow$realm().setString(columnInfo.BackdropPathIndex, value);
    }

    @Override
    @SuppressWarnings("cast")
    public String realmGet$Popularity() {
        proxyState.getRealm$realm().checkIfValid();
        return (java.lang.String) proxyState.getRow$realm().getString(columnInfo.PopularityIndex);
    }

    @Override
    public void realmSet$Popularity(String value) {
        if (proxyState.isUnderConstruction()) {
            if (!proxyState.getAcceptDefaultValue$realm()) {
                return;
            }
            final Row row = proxyState.getRow$realm();
            if (value == null) {
                row.getTable().setNull(columnInfo.PopularityIndex, row.getIndex(), true);
                return;
            }
            row.getTable().setString(columnInfo.PopularityIndex, row.getIndex(), value, true);
            return;
        }

        proxyState.getRealm$realm().checkIfValid();
        if (value == null) {
            proxyState.getRow$realm().setNull(columnInfo.PopularityIndex);
            return;
        }
        proxyState.getRow$realm().setString(columnInfo.PopularityIndex, value);
    }

    private static OsObjectSchemaInfo createExpectedObjectSchemaInfo() {
        OsObjectSchemaInfo.Builder builder = new OsObjectSchemaInfo.Builder("ModelNovel", 8, 0);
        builder.addPersistedProperty("Id", RealmFieldType.INTEGER, !Property.PRIMARY_KEY, !Property.INDEXED, Property.REQUIRED);
        builder.addPersistedProperty("Title", RealmFieldType.STRING, !Property.PRIMARY_KEY, !Property.INDEXED, !Property.REQUIRED);
        builder.addPersistedProperty("VoteAverage", RealmFieldType.DOUBLE, !Property.PRIMARY_KEY, !Property.INDEXED, Property.REQUIRED);
        builder.addPersistedProperty("Overview", RealmFieldType.STRING, !Property.PRIMARY_KEY, !Property.INDEXED, !Property.REQUIRED);
        builder.addPersistedProperty("ReleaseDate", RealmFieldType.STRING, !Property.PRIMARY_KEY, !Property.INDEXED, !Property.REQUIRED);
        builder.addPersistedProperty("PosterPath", RealmFieldType.STRING, !Property.PRIMARY_KEY, !Property.INDEXED, !Property.REQUIRED);
        builder.addPersistedProperty("BackdropPath", RealmFieldType.STRING, !Property.PRIMARY_KEY, !Property.INDEXED, !Property.REQUIRED);
        builder.addPersistedProperty("Popularity", RealmFieldType.STRING, !Property.PRIMARY_KEY, !Property.INDEXED, !Property.REQUIRED);
        return builder.build();
    }

    public static OsObjectSchemaInfo getExpectedObjectSchemaInfo() {
        return expectedObjectSchemaInfo;
    }

    public static ModelNovelColumnInfo createColumnInfo(OsSchemaInfo schemaInfo) {
        return new ModelNovelColumnInfo(schemaInfo);
    }

    public static String getSimpleClassName() {
        return "ModelNovel";
    }

    public static final class ClassNameHelper {
        public static final String INTERNAL_CLASS_NAME = "ModelNovel";
    }

    @SuppressWarnings("cast")
    public static com.aziz.novi.model.ModelNovel createOrUpdateUsingJsonObject(Realm realm, JSONObject json, boolean update)
        throws JSONException {
        final List<String> excludeFields = Collections.<String> emptyList();
        com.aziz.novi.model.ModelNovel obj = realm.createObjectInternal(com.aziz.novi.model.ModelNovel.class, true, excludeFields);

        final com_aziz_novi_model_ModelNovelRealmProxyInterface objProxy = (com_aziz_novi_model_ModelNovelRealmProxyInterface) obj;
        if (json.has("Id")) {
            if (json.isNull("Id")) {
                throw new IllegalArgumentException("Trying to set non-nullable field 'Id' to null.");
            } else {
                objProxy.realmSet$Id((int) json.getInt("Id"));
            }
        }
        if (json.has("Title")) {
            if (json.isNull("Title")) {
                objProxy.realmSet$Title(null);
            } else {
                objProxy.realmSet$Title((String) json.getString("Title"));
            }
        }
        if (json.has("VoteAverage")) {
            if (json.isNull("VoteAverage")) {
                throw new IllegalArgumentException("Trying to set non-nullable field 'VoteAverage' to null.");
            } else {
                objProxy.realmSet$VoteAverage((double) json.getDouble("VoteAverage"));
            }
        }
        if (json.has("Overview")) {
            if (json.isNull("Overview")) {
                objProxy.realmSet$Overview(null);
            } else {
                objProxy.realmSet$Overview((String) json.getString("Overview"));
            }
        }
        if (json.has("ReleaseDate")) {
            if (json.isNull("ReleaseDate")) {
                objProxy.realmSet$ReleaseDate(null);
            } else {
                objProxy.realmSet$ReleaseDate((String) json.getString("ReleaseDate"));
            }
        }
        if (json.has("PosterPath")) {
            if (json.isNull("PosterPath")) {
                objProxy.realmSet$PosterPath(null);
            } else {
                objProxy.realmSet$PosterPath((String) json.getString("PosterPath"));
            }
        }
        if (json.has("BackdropPath")) {
            if (json.isNull("BackdropPath")) {
                objProxy.realmSet$BackdropPath(null);
            } else {
                objProxy.realmSet$BackdropPath((String) json.getString("BackdropPath"));
            }
        }
        if (json.has("Popularity")) {
            if (json.isNull("Popularity")) {
                objProxy.realmSet$Popularity(null);
            } else {
                objProxy.realmSet$Popularity((String) json.getString("Popularity"));
            }
        }
        return obj;
    }

    @SuppressWarnings("cast")
    @TargetApi(Build.VERSION_CODES.HONEYCOMB)
    public static com.aziz.novi.model.ModelNovel createUsingJsonStream(Realm realm, JsonReader reader)
        throws IOException {
        final com.aziz.novi.model.ModelNovel obj = new com.aziz.novi.model.ModelNovel();
        final com_aziz_novi_model_ModelNovelRealmProxyInterface objProxy = (com_aziz_novi_model_ModelNovelRealmProxyInterface) obj;
        reader.beginObject();
        while (reader.hasNext()) {
            String name = reader.nextName();
            if (false) {
            } else if (name.equals("Id")) {
                if (reader.peek() != JsonToken.NULL) {
                    objProxy.realmSet$Id((int) reader.nextInt());
                } else {
                    reader.skipValue();
                    throw new IllegalArgumentException("Trying to set non-nullable field 'Id' to null.");
                }
            } else if (name.equals("Title")) {
                if (reader.peek() != JsonToken.NULL) {
                    objProxy.realmSet$Title((String) reader.nextString());
                } else {
                    reader.skipValue();
                    objProxy.realmSet$Title(null);
                }
            } else if (name.equals("VoteAverage")) {
                if (reader.peek() != JsonToken.NULL) {
                    objProxy.realmSet$VoteAverage((double) reader.nextDouble());
                } else {
                    reader.skipValue();
                    throw new IllegalArgumentException("Trying to set non-nullable field 'VoteAverage' to null.");
                }
            } else if (name.equals("Overview")) {
                if (reader.peek() != JsonToken.NULL) {
                    objProxy.realmSet$Overview((String) reader.nextString());
                } else {
                    reader.skipValue();
                    objProxy.realmSet$Overview(null);
                }
            } else if (name.equals("ReleaseDate")) {
                if (reader.peek() != JsonToken.NULL) {
                    objProxy.realmSet$ReleaseDate((String) reader.nextString());
                } else {
                    reader.skipValue();
                    objProxy.realmSet$ReleaseDate(null);
                }
            } else if (name.equals("PosterPath")) {
                if (reader.peek() != JsonToken.NULL) {
                    objProxy.realmSet$PosterPath((String) reader.nextString());
                } else {
                    reader.skipValue();
                    objProxy.realmSet$PosterPath(null);
                }
            } else if (name.equals("BackdropPath")) {
                if (reader.peek() != JsonToken.NULL) {
                    objProxy.realmSet$BackdropPath((String) reader.nextString());
                } else {
                    reader.skipValue();
                    objProxy.realmSet$BackdropPath(null);
                }
            } else if (name.equals("Popularity")) {
                if (reader.peek() != JsonToken.NULL) {
                    objProxy.realmSet$Popularity((String) reader.nextString());
                } else {
                    reader.skipValue();
                    objProxy.realmSet$Popularity(null);
                }
            } else {
                reader.skipValue();
            }
        }
        reader.endObject();
        return realm.copyToRealm(obj);
    }

    public static com.aziz.novi.model.ModelNovel copyOrUpdate(Realm realm, com.aziz.novi.model.ModelNovel object, boolean update, Map<RealmModel,RealmObjectProxy> cache) {
        if (object instanceof RealmObjectProxy && ((RealmObjectProxy) object).realmGet$proxyState().getRealm$realm() != null) {
            final BaseRealm otherRealm = ((RealmObjectProxy) object).realmGet$proxyState().getRealm$realm();
            if (otherRealm.threadId != realm.threadId) {
                throw new IllegalArgumentException("Objects which belong to Realm instances in other threads cannot be copied into this Realm instance.");
            }
            if (otherRealm.getPath().equals(realm.getPath())) {
                return object;
            }
        }
        final BaseRealm.RealmObjectContext objectContext = BaseRealm.objectContext.get();
        RealmObjectProxy cachedRealmObject = cache.get(object);
        if (cachedRealmObject != null) {
            return (com.aziz.novi.model.ModelNovel) cachedRealmObject;
        }

        return copy(realm, object, update, cache);
    }

    public static com.aziz.novi.model.ModelNovel copy(Realm realm, com.aziz.novi.model.ModelNovel newObject, boolean update, Map<RealmModel,RealmObjectProxy> cache) {
        RealmObjectProxy cachedRealmObject = cache.get(newObject);
        if (cachedRealmObject != null) {
            return (com.aziz.novi.model.ModelNovel) cachedRealmObject;
        }

        // rejecting default values to avoid creating unexpected objects from RealmModel/RealmList fields.
        com.aziz.novi.model.ModelNovel realmObject = realm.createObjectInternal(com.aziz.novi.model.ModelNovel.class, false, Collections.<String>emptyList());
        cache.put(newObject, (RealmObjectProxy) realmObject);

        com_aziz_novi_model_ModelNovelRealmProxyInterface realmObjectSource = (com_aziz_novi_model_ModelNovelRealmProxyInterface) newObject;
        com_aziz_novi_model_ModelNovelRealmProxyInterface realmObjectCopy = (com_aziz_novi_model_ModelNovelRealmProxyInterface) realmObject;

        realmObjectCopy.realmSet$Id(realmObjectSource.realmGet$Id());
        realmObjectCopy.realmSet$Title(realmObjectSource.realmGet$Title());
        realmObjectCopy.realmSet$VoteAverage(realmObjectSource.realmGet$VoteAverage());
        realmObjectCopy.realmSet$Overview(realmObjectSource.realmGet$Overview());
        realmObjectCopy.realmSet$ReleaseDate(realmObjectSource.realmGet$ReleaseDate());
        realmObjectCopy.realmSet$PosterPath(realmObjectSource.realmGet$PosterPath());
        realmObjectCopy.realmSet$BackdropPath(realmObjectSource.realmGet$BackdropPath());
        realmObjectCopy.realmSet$Popularity(realmObjectSource.realmGet$Popularity());
        return realmObject;
    }

    public static long insert(Realm realm, com.aziz.novi.model.ModelNovel object, Map<RealmModel,Long> cache) {
        if (object instanceof RealmObjectProxy && ((RealmObjectProxy) object).realmGet$proxyState().getRealm$realm() != null && ((RealmObjectProxy) object).realmGet$proxyState().getRealm$realm().getPath().equals(realm.getPath())) {
            return ((RealmObjectProxy) object).realmGet$proxyState().getRow$realm().getIndex();
        }
        Table table = realm.getTable(com.aziz.novi.model.ModelNovel.class);
        long tableNativePtr = table.getNativePtr();
        ModelNovelColumnInfo columnInfo = (ModelNovelColumnInfo) realm.getSchema().getColumnInfo(com.aziz.novi.model.ModelNovel.class);
        long rowIndex = OsObject.createRow(table);
        cache.put(object, rowIndex);
        Table.nativeSetLong(tableNativePtr, columnInfo.IdIndex, rowIndex, ((com_aziz_novi_model_ModelNovelRealmProxyInterface) object).realmGet$Id(), false);
        String realmGet$Title = ((com_aziz_novi_model_ModelNovelRealmProxyInterface) object).realmGet$Title();
        if (realmGet$Title != null) {
            Table.nativeSetString(tableNativePtr, columnInfo.TitleIndex, rowIndex, realmGet$Title, false);
        }
        Table.nativeSetDouble(tableNativePtr, columnInfo.VoteAverageIndex, rowIndex, ((com_aziz_novi_model_ModelNovelRealmProxyInterface) object).realmGet$VoteAverage(), false);
        String realmGet$Overview = ((com_aziz_novi_model_ModelNovelRealmProxyInterface) object).realmGet$Overview();
        if (realmGet$Overview != null) {
            Table.nativeSetString(tableNativePtr, columnInfo.OverviewIndex, rowIndex, realmGet$Overview, false);
        }
        String realmGet$ReleaseDate = ((com_aziz_novi_model_ModelNovelRealmProxyInterface) object).realmGet$ReleaseDate();
        if (realmGet$ReleaseDate != null) {
            Table.nativeSetString(tableNativePtr, columnInfo.ReleaseDateIndex, rowIndex, realmGet$ReleaseDate, false);
        }
        String realmGet$PosterPath = ((com_aziz_novi_model_ModelNovelRealmProxyInterface) object).realmGet$PosterPath();
        if (realmGet$PosterPath != null) {
            Table.nativeSetString(tableNativePtr, columnInfo.PosterPathIndex, rowIndex, realmGet$PosterPath, false);
        }
        String realmGet$BackdropPath = ((com_aziz_novi_model_ModelNovelRealmProxyInterface) object).realmGet$BackdropPath();
        if (realmGet$BackdropPath != null) {
            Table.nativeSetString(tableNativePtr, columnInfo.BackdropPathIndex, rowIndex, realmGet$BackdropPath, false);
        }
        String realmGet$Popularity = ((com_aziz_novi_model_ModelNovelRealmProxyInterface) object).realmGet$Popularity();
        if (realmGet$Popularity != null) {
            Table.nativeSetString(tableNativePtr, columnInfo.PopularityIndex, rowIndex, realmGet$Popularity, false);
        }
        return rowIndex;
    }

    public static void insert(Realm realm, Iterator<? extends RealmModel> objects, Map<RealmModel,Long> cache) {
        Table table = realm.getTable(com.aziz.novi.model.ModelNovel.class);
        long tableNativePtr = table.getNativePtr();
        ModelNovelColumnInfo columnInfo = (ModelNovelColumnInfo) realm.getSchema().getColumnInfo(com.aziz.novi.model.ModelNovel.class);
        com.aziz.novi.model.ModelNovel object = null;
        while (objects.hasNext()) {
            object = (com.aziz.novi.model.ModelNovel) objects.next();
            if (cache.containsKey(object)) {
                continue;
            }
            if (object instanceof RealmObjectProxy && ((RealmObjectProxy) object).realmGet$proxyState().getRealm$realm() != null && ((RealmObjectProxy) object).realmGet$proxyState().getRealm$realm().getPath().equals(realm.getPath())) {
                cache.put(object, ((RealmObjectProxy) object).realmGet$proxyState().getRow$realm().getIndex());
                continue;
            }
            long rowIndex = OsObject.createRow(table);
            cache.put(object, rowIndex);
            Table.nativeSetLong(tableNativePtr, columnInfo.IdIndex, rowIndex, ((com_aziz_novi_model_ModelNovelRealmProxyInterface) object).realmGet$Id(), false);
            String realmGet$Title = ((com_aziz_novi_model_ModelNovelRealmProxyInterface) object).realmGet$Title();
            if (realmGet$Title != null) {
                Table.nativeSetString(tableNativePtr, columnInfo.TitleIndex, rowIndex, realmGet$Title, false);
            }
            Table.nativeSetDouble(tableNativePtr, columnInfo.VoteAverageIndex, rowIndex, ((com_aziz_novi_model_ModelNovelRealmProxyInterface) object).realmGet$VoteAverage(), false);
            String realmGet$Overview = ((com_aziz_novi_model_ModelNovelRealmProxyInterface) object).realmGet$Overview();
            if (realmGet$Overview != null) {
                Table.nativeSetString(tableNativePtr, columnInfo.OverviewIndex, rowIndex, realmGet$Overview, false);
            }
            String realmGet$ReleaseDate = ((com_aziz_novi_model_ModelNovelRealmProxyInterface) object).realmGet$ReleaseDate();
            if (realmGet$ReleaseDate != null) {
                Table.nativeSetString(tableNativePtr, columnInfo.ReleaseDateIndex, rowIndex, realmGet$ReleaseDate, false);
            }
            String realmGet$PosterPath = ((com_aziz_novi_model_ModelNovelRealmProxyInterface) object).realmGet$PosterPath();
            if (realmGet$PosterPath != null) {
                Table.nativeSetString(tableNativePtr, columnInfo.PosterPathIndex, rowIndex, realmGet$PosterPath, false);
            }
            String realmGet$BackdropPath = ((com_aziz_novi_model_ModelNovelRealmProxyInterface) object).realmGet$BackdropPath();
            if (realmGet$BackdropPath != null) {
                Table.nativeSetString(tableNativePtr, columnInfo.BackdropPathIndex, rowIndex, realmGet$BackdropPath, false);
            }
            String realmGet$Popularity = ((com_aziz_novi_model_ModelNovelRealmProxyInterface) object).realmGet$Popularity();
            if (realmGet$Popularity != null) {
                Table.nativeSetString(tableNativePtr, columnInfo.PopularityIndex, rowIndex, realmGet$Popularity, false);
            }
        }
    }

    public static long insertOrUpdate(Realm realm, com.aziz.novi.model.ModelNovel object, Map<RealmModel,Long> cache) {
        if (object instanceof RealmObjectProxy && ((RealmObjectProxy) object).realmGet$proxyState().getRealm$realm() != null && ((RealmObjectProxy) object).realmGet$proxyState().getRealm$realm().getPath().equals(realm.getPath())) {
            return ((RealmObjectProxy) object).realmGet$proxyState().getRow$realm().getIndex();
        }
        Table table = realm.getTable(com.aziz.novi.model.ModelNovel.class);
        long tableNativePtr = table.getNativePtr();
        ModelNovelColumnInfo columnInfo = (ModelNovelColumnInfo) realm.getSchema().getColumnInfo(com.aziz.novi.model.ModelNovel.class);
        long rowIndex = OsObject.createRow(table);
        cache.put(object, rowIndex);
        Table.nativeSetLong(tableNativePtr, columnInfo.IdIndex, rowIndex, ((com_aziz_novi_model_ModelNovelRealmProxyInterface) object).realmGet$Id(), false);
        String realmGet$Title = ((com_aziz_novi_model_ModelNovelRealmProxyInterface) object).realmGet$Title();
        if (realmGet$Title != null) {
            Table.nativeSetString(tableNativePtr, columnInfo.TitleIndex, rowIndex, realmGet$Title, false);
        } else {
            Table.nativeSetNull(tableNativePtr, columnInfo.TitleIndex, rowIndex, false);
        }
        Table.nativeSetDouble(tableNativePtr, columnInfo.VoteAverageIndex, rowIndex, ((com_aziz_novi_model_ModelNovelRealmProxyInterface) object).realmGet$VoteAverage(), false);
        String realmGet$Overview = ((com_aziz_novi_model_ModelNovelRealmProxyInterface) object).realmGet$Overview();
        if (realmGet$Overview != null) {
            Table.nativeSetString(tableNativePtr, columnInfo.OverviewIndex, rowIndex, realmGet$Overview, false);
        } else {
            Table.nativeSetNull(tableNativePtr, columnInfo.OverviewIndex, rowIndex, false);
        }
        String realmGet$ReleaseDate = ((com_aziz_novi_model_ModelNovelRealmProxyInterface) object).realmGet$ReleaseDate();
        if (realmGet$ReleaseDate != null) {
            Table.nativeSetString(tableNativePtr, columnInfo.ReleaseDateIndex, rowIndex, realmGet$ReleaseDate, false);
        } else {
            Table.nativeSetNull(tableNativePtr, columnInfo.ReleaseDateIndex, rowIndex, false);
        }
        String realmGet$PosterPath = ((com_aziz_novi_model_ModelNovelRealmProxyInterface) object).realmGet$PosterPath();
        if (realmGet$PosterPath != null) {
            Table.nativeSetString(tableNativePtr, columnInfo.PosterPathIndex, rowIndex, realmGet$PosterPath, false);
        } else {
            Table.nativeSetNull(tableNativePtr, columnInfo.PosterPathIndex, rowIndex, false);
        }
        String realmGet$BackdropPath = ((com_aziz_novi_model_ModelNovelRealmProxyInterface) object).realmGet$BackdropPath();
        if (realmGet$BackdropPath != null) {
            Table.nativeSetString(tableNativePtr, columnInfo.BackdropPathIndex, rowIndex, realmGet$BackdropPath, false);
        } else {
            Table.nativeSetNull(tableNativePtr, columnInfo.BackdropPathIndex, rowIndex, false);
        }
        String realmGet$Popularity = ((com_aziz_novi_model_ModelNovelRealmProxyInterface) object).realmGet$Popularity();
        if (realmGet$Popularity != null) {
            Table.nativeSetString(tableNativePtr, columnInfo.PopularityIndex, rowIndex, realmGet$Popularity, false);
        } else {
            Table.nativeSetNull(tableNativePtr, columnInfo.PopularityIndex, rowIndex, false);
        }
        return rowIndex;
    }

    public static void insertOrUpdate(Realm realm, Iterator<? extends RealmModel> objects, Map<RealmModel,Long> cache) {
        Table table = realm.getTable(com.aziz.novi.model.ModelNovel.class);
        long tableNativePtr = table.getNativePtr();
        ModelNovelColumnInfo columnInfo = (ModelNovelColumnInfo) realm.getSchema().getColumnInfo(com.aziz.novi.model.ModelNovel.class);
        com.aziz.novi.model.ModelNovel object = null;
        while (objects.hasNext()) {
            object = (com.aziz.novi.model.ModelNovel) objects.next();
            if (cache.containsKey(object)) {
                continue;
            }
            if (object instanceof RealmObjectProxy && ((RealmObjectProxy) object).realmGet$proxyState().getRealm$realm() != null && ((RealmObjectProxy) object).realmGet$proxyState().getRealm$realm().getPath().equals(realm.getPath())) {
                cache.put(object, ((RealmObjectProxy) object).realmGet$proxyState().getRow$realm().getIndex());
                continue;
            }
            long rowIndex = OsObject.createRow(table);
            cache.put(object, rowIndex);
            Table.nativeSetLong(tableNativePtr, columnInfo.IdIndex, rowIndex, ((com_aziz_novi_model_ModelNovelRealmProxyInterface) object).realmGet$Id(), false);
            String realmGet$Title = ((com_aziz_novi_model_ModelNovelRealmProxyInterface) object).realmGet$Title();
            if (realmGet$Title != null) {
                Table.nativeSetString(tableNativePtr, columnInfo.TitleIndex, rowIndex, realmGet$Title, false);
            } else {
                Table.nativeSetNull(tableNativePtr, columnInfo.TitleIndex, rowIndex, false);
            }
            Table.nativeSetDouble(tableNativePtr, columnInfo.VoteAverageIndex, rowIndex, ((com_aziz_novi_model_ModelNovelRealmProxyInterface) object).realmGet$VoteAverage(), false);
            String realmGet$Overview = ((com_aziz_novi_model_ModelNovelRealmProxyInterface) object).realmGet$Overview();
            if (realmGet$Overview != null) {
                Table.nativeSetString(tableNativePtr, columnInfo.OverviewIndex, rowIndex, realmGet$Overview, false);
            } else {
                Table.nativeSetNull(tableNativePtr, columnInfo.OverviewIndex, rowIndex, false);
            }
            String realmGet$ReleaseDate = ((com_aziz_novi_model_ModelNovelRealmProxyInterface) object).realmGet$ReleaseDate();
            if (realmGet$ReleaseDate != null) {
                Table.nativeSetString(tableNativePtr, columnInfo.ReleaseDateIndex, rowIndex, realmGet$ReleaseDate, false);
            } else {
                Table.nativeSetNull(tableNativePtr, columnInfo.ReleaseDateIndex, rowIndex, false);
            }
            String realmGet$PosterPath = ((com_aziz_novi_model_ModelNovelRealmProxyInterface) object).realmGet$PosterPath();
            if (realmGet$PosterPath != null) {
                Table.nativeSetString(tableNativePtr, columnInfo.PosterPathIndex, rowIndex, realmGet$PosterPath, false);
            } else {
                Table.nativeSetNull(tableNativePtr, columnInfo.PosterPathIndex, rowIndex, false);
            }
            String realmGet$BackdropPath = ((com_aziz_novi_model_ModelNovelRealmProxyInterface) object).realmGet$BackdropPath();
            if (realmGet$BackdropPath != null) {
                Table.nativeSetString(tableNativePtr, columnInfo.BackdropPathIndex, rowIndex, realmGet$BackdropPath, false);
            } else {
                Table.nativeSetNull(tableNativePtr, columnInfo.BackdropPathIndex, rowIndex, false);
            }
            String realmGet$Popularity = ((com_aziz_novi_model_ModelNovelRealmProxyInterface) object).realmGet$Popularity();
            if (realmGet$Popularity != null) {
                Table.nativeSetString(tableNativePtr, columnInfo.PopularityIndex, rowIndex, realmGet$Popularity, false);
            } else {
                Table.nativeSetNull(tableNativePtr, columnInfo.PopularityIndex, rowIndex, false);
            }
        }
    }

    public static com.aziz.novi.model.ModelNovel createDetachedCopy(com.aziz.novi.model.ModelNovel realmObject, int currentDepth, int maxDepth, Map<RealmModel, CacheData<RealmModel>> cache) {
        if (currentDepth > maxDepth || realmObject == null) {
            return null;
        }
        CacheData<RealmModel> cachedObject = cache.get(realmObject);
        com.aziz.novi.model.ModelNovel unmanagedObject;
        if (cachedObject == null) {
            unmanagedObject = new com.aziz.novi.model.ModelNovel();
            cache.put(realmObject, new RealmObjectProxy.CacheData<RealmModel>(currentDepth, unmanagedObject));
        } else {
            // Reuse cached object or recreate it because it was encountered at a lower depth.
            if (currentDepth >= cachedObject.minDepth) {
                return (com.aziz.novi.model.ModelNovel) cachedObject.object;
            }
            unmanagedObject = (com.aziz.novi.model.ModelNovel) cachedObject.object;
            cachedObject.minDepth = currentDepth;
        }
        com_aziz_novi_model_ModelNovelRealmProxyInterface unmanagedCopy = (com_aziz_novi_model_ModelNovelRealmProxyInterface) unmanagedObject;
        com_aziz_novi_model_ModelNovelRealmProxyInterface realmSource = (com_aziz_novi_model_ModelNovelRealmProxyInterface) realmObject;
        unmanagedCopy.realmSet$Id(realmSource.realmGet$Id());
        unmanagedCopy.realmSet$Title(realmSource.realmGet$Title());
        unmanagedCopy.realmSet$VoteAverage(realmSource.realmGet$VoteAverage());
        unmanagedCopy.realmSet$Overview(realmSource.realmGet$Overview());
        unmanagedCopy.realmSet$ReleaseDate(realmSource.realmGet$ReleaseDate());
        unmanagedCopy.realmSet$PosterPath(realmSource.realmGet$PosterPath());
        unmanagedCopy.realmSet$BackdropPath(realmSource.realmGet$BackdropPath());
        unmanagedCopy.realmSet$Popularity(realmSource.realmGet$Popularity());

        return unmanagedObject;
    }

    @Override
    @SuppressWarnings("ArrayToString")
    public String toString() {
        if (!RealmObject.isValid(this)) {
            return "Invalid object";
        }
        StringBuilder stringBuilder = new StringBuilder("ModelNovel = proxy[");
        stringBuilder.append("{Id:");
        stringBuilder.append(realmGet$Id());
        stringBuilder.append("}");
        stringBuilder.append(",");
        stringBuilder.append("{Title:");
        stringBuilder.append(realmGet$Title() != null ? realmGet$Title() : "null");
        stringBuilder.append("}");
        stringBuilder.append(",");
        stringBuilder.append("{VoteAverage:");
        stringBuilder.append(realmGet$VoteAverage());
        stringBuilder.append("}");
        stringBuilder.append(",");
        stringBuilder.append("{Overview:");
        stringBuilder.append(realmGet$Overview() != null ? realmGet$Overview() : "null");
        stringBuilder.append("}");
        stringBuilder.append(",");
        stringBuilder.append("{ReleaseDate:");
        stringBuilder.append(realmGet$ReleaseDate() != null ? realmGet$ReleaseDate() : "null");
        stringBuilder.append("}");
        stringBuilder.append(",");
        stringBuilder.append("{PosterPath:");
        stringBuilder.append(realmGet$PosterPath() != null ? realmGet$PosterPath() : "null");
        stringBuilder.append("}");
        stringBuilder.append(",");
        stringBuilder.append("{BackdropPath:");
        stringBuilder.append(realmGet$BackdropPath() != null ? realmGet$BackdropPath() : "null");
        stringBuilder.append("}");
        stringBuilder.append(",");
        stringBuilder.append("{Popularity:");
        stringBuilder.append(realmGet$Popularity() != null ? realmGet$Popularity() : "null");
        stringBuilder.append("}");
        stringBuilder.append("]");
        return stringBuilder.toString();
    }

    @Override
    public ProxyState<?> realmGet$proxyState() {
        return proxyState;
    }

    @Override
    public int hashCode() {
        String realmName = proxyState.getRealm$realm().getPath();
        String tableName = proxyState.getRow$realm().getTable().getName();
        long rowIndex = proxyState.getRow$realm().getIndex();

        int result = 17;
        result = 31 * result + ((realmName != null) ? realmName.hashCode() : 0);
        result = 31 * result + ((tableName != null) ? tableName.hashCode() : 0);
        result = 31 * result + (int) (rowIndex ^ (rowIndex >>> 32));
        return result;
    }

    @Override
    public boolean equals(Object o) {
        if (this == o) return true;
        if (o == null || getClass() != o.getClass()) return false;
        com_aziz_novi_model_ModelNovelRealmProxy aModelNovel = (com_aziz_novi_model_ModelNovelRealmProxy)o;

        String path = proxyState.getRealm$realm().getPath();
        String otherPath = aModelNovel.proxyState.getRealm$realm().getPath();
        if (path != null ? !path.equals(otherPath) : otherPath != null) return false;

        String tableName = proxyState.getRow$realm().getTable().getName();
        String otherTableName = aModelNovel.proxyState.getRow$realm().getTable().getName();
        if (tableName != null ? !tableName.equals(otherTableName) : otherTableName != null) return false;

        if (proxyState.getRow$realm().getIndex() != aModelNovel.proxyState.getRow$realm().getIndex()) return false;

        return true;
    }
}
